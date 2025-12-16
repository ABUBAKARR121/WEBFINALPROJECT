<?php
include 'config.php';
session_start();

if (isset($_POST['btn_register'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing

    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['user'] = $user;
        header("Location: index.php"); // Auto redirect
        exit();
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register | FASL</title>
    <style>
        body {
            font-family: sans-serif;
            background: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #006064;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 95%;
            padding: 10px;
            background: #006064;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #004d40;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Agent Registration</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="btn_register">Register & Login</button>
        </form>
        <?php if (isset($msg))
            echo "<p style='color:red'>$msg</p>"; ?>
    </div>
</body>

</html>