<?php
include 'config.php';

// --- CREATE (Insert Data) ---
if (isset($_POST['add_player'])) {
    $name = $_POST['name'];
    $pos = $_POST['position'];
    $club = $_POST['club'];
    $agent = $_POST['agent'];
    $val = $_POST['value'];

    $conn->query("INSERT INTO players (fullname, position, club, agent, market_value) VALUES ('$name', '$pos', '$club', '$agent', '$val')");
    header("Location: dashboard.php"); // Refresh to see changes
}

// --- DELETE (Remove Data) ---
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $conn->query("DELETE FROM players WHERE id=$id");
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | FASL</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #eceff1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background: #1b5e20;
            color: white;
            padding: 20px;
        }

        nav {
            float: right;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            flex: 1;
        }

        /* Form Styling */
        .form-panel {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-panel input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ddd;
            width: 18%;
        }

        .btn-add {
            background: #0277bd;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #37474f;
            color: white;
        }

        .btn-edit {
            background: #fbc02d;
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
        }

        .btn-del {
            background: #d32f2f;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: auto;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="register.php">Logout</a>
        </nav>
        <h1 style="margin:0;">Agent Dashboard</h1>
    </header>

    <div class="container">
        <div class="form-panel">
            <h3>Add New Player</h3>
            <form method="POST">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="text" name="position" placeholder="Position" required>
                <input type="text" name="club" placeholder="Club" required>
                <input type="text" name="agent" placeholder="Agent" required>
                <input type="number" name="value" placeholder="Value (SLL)" required>
                <button type="submit" name="add_player" class="btn-add">Add Player</button>
            </form>
        </div>

        <h3>Player Database</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Club</th>
                    <th>Agent</th>
                    <th>Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM players");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['position']}</td>
                        <td>{$row['club']}</td>
                        <td>{$row['agent']}</td>
                        <td>SLL {$row['market_value']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}' class='btn-edit'>Update</a>
                            <a href='dashboard.php?del={$row['id']}' class='btn-del' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        &copy; 2025 Football Agent Sierra Leone. All Rights Reserved.
    </footer>
</body>

</html>