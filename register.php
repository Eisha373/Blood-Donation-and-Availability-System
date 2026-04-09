<<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        form {
            background: white;
            padding: 25px;
            margin: auto;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px lightgray;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type=submit] {
            background-color: #d63031;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type=submit]:hover {
            background-color: #c0392b;
        }
        .error {
            color: red;
            font-size: 12px;
            margin-top: -4px;
            margin-bottom: 8px;
        }
        .invalid {
            border-color: red;
        }
    </style>
</head>
<body>

    <h2>Blood Donor Registration</h2>

    <form id="donorForm" method="POST" action="insert.php" novalidate>
        <label for="name">Full Name</label>
        <input type="text" name="name" required>
        <div class="error" id="nameError"></div>

        <label for="age">Age</label>
        <input type="number" name="age" required>
        <div class="error" id="ageError"></div>

        <label for="gender">Gender</label>
        <select name="gender" required>
            <option value="" disabled selected>--Select--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        <div class="error" id="genderError"></div>

        <label for="blood_group">Blood Group</label>
        <select name="blood_group" required>
            <option value="" disabled selected>--Select--</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>
        <div class="error" id="bloodGroupError"></div>

        <label for="city">City</label>
        <input type="text" name="city" required>
        <div class="error" id="cityError"></div>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" required>
        <div class="error" id="phoneError"></div>

        <label for="email">Email Address</label>
        <input type="email" name="email" required>
        <div class="error" id="emailError"></div>

        <input type="submit" value="Register Donor">
    </form>

    <script>
        const form = document.getElementById('donorForm');

        form.addEventListener('submit', function(e) {
            let valid = true;

            const name = form.name.value.trim();
            const age = form.age.value.trim();
            const gender = form.gender.value;
            const bloodGroup = form.blood_group.value;
            const city = form.city.value.trim();
            const phone = form.phone.value.trim();
            const email = form.email.value.trim();

            // Reset errors
            document.querySelectorAll('.error').forEach(el => el.textContent = '');
            document.querySelectorAll('input, select').forEach(el => el.classList.remove('invalid'));

            // Name
            if (!/^[a-zA-Z\s]+$/.test(name)) {
                document.getElementById('nameError').textContent = "Only letters allowed.";
                form.name.classList.add('invalid');
                valid = false;
            }

            // Age
            if (age < 18 || age > 65 || age === "") {
                document.getElementById('ageError').textContent = "Age must be between 18 and 65.";
                form.age.classList.add('invalid');
                valid = false;
            }

            // Gender
            if (!gender) {
                document.getElementById('genderError').textContent = "Please select a gender.";
                form.gender.classList.add('invalid');
                valid = false;
            }

            // Blood Group
            if (!bloodGroup) {
                document.getElementById('bloodGroupError').textContent = "Please select a blood group.";
                form.blood_group.classList.add('invalid');
                valid = false;
            }

            // City
            if (city === "") {
                document.getElementById('cityError').textContent = "City is required.";
                form.city.classList.add('invalid');
                valid = false;
            }

            // Phone
            if (!/^[0-9]{10,15}$/.test(phone)) {
                document.getElementById('phoneError').textContent = "Phone must be 10–15 digits.";
                form.phone.classList.add('invalid');
                valid = false;
            }

            // Email
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById('emailError').textContent = "Enter a valid email.";
                form.email.classList.add('invalid');
                valid = false;
            }

            if (!valid) {
                e.preventDefault(); // Stop submission
            }
        });
    </script>

</body>
</html>
