<?php
include 'config.php';

// Get ID from URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM players WHERE id=$id");
    $row = $result->fetch_assoc();
}

// Handle Update Logic
if (isset($_POST['update_player'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pos = $_POST['position'];
    $club = $_POST['club'];
    $agent = $_POST['agent'];
    $val = $_POST['value'];

    $conn->query("UPDATE players SET fullname='$name', position='$pos', club='$club', agent='$agent', market_value='$val' WHERE id=$id");
    header("Location: dashboard.php"); // Redirect back to dashboard
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Update Player | FASL</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #eceff1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: white;
            padding: 40px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #fbc02d;
            color: black;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Update Player Details</h2>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label>Full Name</label>
            <input type="text" name="name" value="<?php echo $row['fullname']; ?>" required>

            <label>Position</label>
            <input type="text" name="position" value="<?php echo $row['position']; ?>" required>

            <label>Club</label>
            <input type="text" name="club" value="<?php echo $row['club']; ?>" required>

            <label>Agent</label>
            <input type="text" name="agent" value="<?php echo $row['agent']; ?>" required>

            <label>Market Value</label>
            <input type="number" name="value" value="<?php echo $row['market_value']; ?>" required>

            <button type="submit" name="update_player">Save Changes</button>
        </form>
        <br>
        <a href="dashboard.php" style="text-decoration:none; color:#333;">Cancel and Go Back</a>
    </div>
</body>

</html>