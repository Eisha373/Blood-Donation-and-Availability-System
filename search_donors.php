
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && (!empty($_GET['city']) || !empty($_GET['blood_group']))) {

    $city = $_GET['city'];
    $blood_group = $_GET['blood_group'];

    // Connect to MySQL
    $conn = mysqli_connect("localhost", "root", "", "blood_donation");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Build query based on input
    $sql = "SELECT * FROM donors WHERE 1";
    if (!empty($city)) {
        $sql .= " AND city LIKE '%" . mysqli_real_escape_string($conn, $city) . "%'";
    }
    if (!empty($blood_group)) {
        $sql .= " AND blood_group = '" . mysqli_real_escape_string($conn, $blood_group) . "'";
    }

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
                    <th>Registered</th>
                </tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['blood_group']."</td>
                    <td>".$row['city']."</td>
                    <td>".$row['phone']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['registration_date']."</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align:center;'>No donors found matching your search.</p>";
    }

    mysqli_close($conn);
}
?>

</body>
</html>
