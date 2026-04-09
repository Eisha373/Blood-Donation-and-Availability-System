<!DOCTYPE html>
<html>
<head>
    <title>Search Blood Donors</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: crimson;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            display: flex;
            justify-content: center;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #666;
        }
        .container {
            padding: 40px;
            max-width: 600px;
            margin: auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        select, input[type="text"], button {
            width: 100%;
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: crimson;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: darkred;
        }
        footer {
            margin-top: 50px;
            background-color: #222;
            color: #ccc;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<header>
    <h1>Blood Donation & Availability System</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Become a Donor</a>
    <a href="search.php">Find Donors</a>
</nav>

<div class="container">
    <h2>Find a Donor</h2>

    <form method="POST" action="search_results.php">
        <select name="blood_group" required>
            <option value="">Select Blood Group</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>

        <input type="text" name="city" placeholder="Enter City" required>

        <button type="submit">Search</button>
    </form>
</div>

<footer>
    &copy; 2025 Blood Donation System
</footer>

</body>
</html>
