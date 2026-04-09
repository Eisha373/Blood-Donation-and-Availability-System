<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial;
            background: #f9f9f9;
            margin: 0;
        }
        header {
            background-color: crimson;
            color: white;
            padding: 20px;
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
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 25px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:hover {
            background-color: #f9f9f9;
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
    <h1>Search Results - Donors Found</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="register.php">Become a Donor</a>
    <a href="search.php">Find Donors</a>
</nav>

<div class="container">
    <h2>Matching Donors</h2>

    <!-- Sample table, later dynamic data will be shown via PHP -->
    <table>
        <tr>
            <th>Name</th>
            <th>Blood Group</th>
            <th>City</th>
            <th>Contact</th>
            <th>Last Donation</th>
        </tr>
        <tr>
            <td>Ayesha Khan</td>
            <td>B+</td>
            <td>Karachi</td>
            <td>0300-1234567</td>
            <td>2025-06-10</td>
        </tr>
        <tr>
            <td>Ali Raza</td>
            <td>B+</td>
            <td>Karachi</td>
            <td>0311-9876543</td>
            <td>2025-05-22</td>
        </tr>
        <!-- More rows will be added dynamically -->
    </table>
</div>

<footer>
    &copy; 2025 Blood Donation System
</footer>

</body>
</html>
