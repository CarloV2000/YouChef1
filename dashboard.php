<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class ="card">
        <div class="welcome">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>You're now logged in to your account.</p>

            <div class="category-section">
                <h3>Selezionare la categoria di ricetta</h3>
                <div class="buttons">
                    <button>Primo</button>
                    <button>Secondo</button>
                    <button>Dolce</button>
                </div>
            </div>
        </div>
    <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
