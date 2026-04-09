<!DOCTYPE html>
<html>
<head>
    <title>Registered Donors</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f9fc;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px lightgray;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #d63031;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .back {
            text-align: center;
            margin-top: 20px;
        }
        .back a {
            color: #d63031;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Registered Donors</h2>

    <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "blood_donation");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Fetch donors
    $sql = "SELECT * FROM donors ORDER BY registration_date DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Registered On</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["age"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["blood_group"]."</td>
                    <td>".$row["city"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["registration_date"]."</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No donors found.</p>";
    }

    mysqli_close($conn);
    ?>

    <div class="back">
        <a href="register.php">← Back to Register</a>
    </div>

</body>
</html>
