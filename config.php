<?php
// Connect to MySQL (change password if needed)
$conn = mysqli_connect("localhost", "root", "", "blood_donation");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Insert query
    $sql = "INSERT INTO donors (name, age, gender, blood_group, city, phone, email)
            VALUES ('$name', $age, '$gender', '$blood_group', '$city', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "✅ Donor registered successfully.";
    } else {
        echo "❌ Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "❗Invalid request method.";
}
?>
