from flask import Flask, render_template, request, redirect, url_for, session
import sqlite3

app = Flask(__name__)
app.secret_key = 'your_secret_key'

# --- Database Initialization ---
def init_db():
    conn = sqlite3.connect('database.db')
    c = conn.cursor()
    c.execute('''CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT,
                    email TEXT UNIQUE,
                    password TEXT,
                    role TEXT,
                    blood_group TEXT,
                    location TEXT,
                    available TEXT DEFAULT 'Y'
                )''')
    conn.commit()
    conn.close()

init_db()

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/register', methods=['GET', 'POST'])
def register():
    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        password = request.form['password']
        role = request.form['role']
        blood_group = request.form['blood_group']
        location = request.form['location']

        conn = sqlite3.connect('database.db')
        c = conn.cursor()
        c.execute("INSERT INTO users (name, email, password, role, blood_group, location) VALUES (?, ?, ?, ?, ?, ?)",
                  (name, email, password, role, blood_group, location))
        conn.commit()
        conn.close()
        return redirect(url_for('login'))
    return render_template('register.html')

@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        email = request.form['email']
        password = request.form['password']

        conn = sqlite3.connect('database.db')
        c = conn.cursor()
        c.execute("SELECT * FROM users WHERE email = ? AND password = ?", (email, password))
        user = c.fetchone()
        conn.close()

        if user:
            session['user'] = {'id': user[0], 'name': user[1], 'role': user[4]}
            if user[4] == 'donor':
                return redirect(url_for('donor_dashboard'))
            else:
                return redirect(url_for('recipient_dashboard'))
        else:
            return "Invalid login"
    return render_template('login.html')

@app.route('/donor')
def donor_dashboard():
    if 'user' in session and session['user']['role'] == 'donor':
        return render_template('donor_dashboard.html', user=session['user'])
    return redirect(url_for('login'))

@app.route('/recipient', methods=['GET', 'POST'])
def recipient_dashboard():
    if 'user' in session and session['user']['role'] == 'recipient':
        if request.method == 'POST':
            blood_group = request.form['blood_group']
            location = request.form['location']

            conn = sqlite3.connect('database.db')
            c = conn.cursor()
            c.execute("SELECT name, blood_group, location FROM users WHERE role = 'donor' AND available = 'Y' AND blood_group = ? AND location = ?",
                      (blood_group, location))
            donors = c.fetchall()
            conn.close()

            return render_template('search_results.html', donors=donors)

        return render_template('recipient_dashboard.html', user=session['user'])
    return redirect(url_for('login'))

@app.route('/update_availability', methods=['POST'])
def update_availability():
    if 'user' in session and session['user']['role'] == 'donor':
        status = request.form['available']
        conn = sqlite3.connect('database.db')
        c = conn.cursor()
        c.execute("UPDATE users SET available = ? WHERE id = ?", (status, session['user']['id']))
        conn.commit()
        conn.close()
        return redirect(url_for('donor_dashboard'))
    return redirect(url_for('login'))

@app.route('/logout')
def logout():
    session.clear()
    return redirect(url_for('home'))

if __name__ == '__main__':
    app.run(debug=True)
