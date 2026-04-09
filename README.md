# 🩸 Blood Donation and Availability System

A simple web-based **Blood Donation and Availability System** developed using **PHP, MySQL, HTML, and CSS**.
This project helps users **register as blood donors**, search available donors by blood group, and view donor details easily.

---

## 📌 Features

* 👤 Donor Registration
* 🔍 Search Donors by Blood Group
* 📋 View All Available Donors
* 💾 MySQL Database Integration
* ✅ Thank You / Confirmation Page
* 🌐 Simple and user-friendly interface

---

## 🛠️ Technologies Used

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL
* **Version Control:** Git & GitHub

---

## 📂 Project Structure

```text
Blood-Donation-System/
│
├── database/
│   └── blood_donation.sql
│
├── includes/
│   └── config.php
│
├── pages/
│   ├── register.php
│   ├── search.php
│   ├── search_results.php
│   ├── thank_you.php
│   └── view_donors.php
│
├── assets/
│   └── css/
│       └── style.css
│
├── index.php
└── README.md
```

---

## ⚙️ Installation Steps

1. Clone this repository:

   ```bash
   git clone <your-github-repo-link>
   ```
2. Move project folder to **htdocs** (XAMPP)
3. Start **Apache** and **MySQL** from XAMPP
4. Import `blood_donation.sql` into phpMyAdmin
5. Open browser and run:

   ```
   http://localhost/Blood-Donation-System/
   ```

---

## 🗄️ Database Setup

* Create a database named:

  ```sql
  blood_donation
  ```
* Import the SQL file from:

  ```
  database/blood_donation.sql
  ```

---

## 🎯 Purpose of Project

The main purpose of this project is to provide an easy way for:

* blood donors to register themselves
* users to quickly find blood donors
* hospitals or patients to search blood availability

This project is developed as a **college academic project**.

---

## 👩‍💻 Author

**Eisha Sohail**
BS Software Engineering Student

---

## ⭐ Future Improvements

* User login system
* Admin dashboard
* Donor availability status
* Location-based search
* Email notifications
* Mobile responsive UI
