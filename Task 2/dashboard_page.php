<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Get user information
$username = $_SESSION['username'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User Authentication</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="dashboard-wrapper">
            <header class="dashboard-header">
                <h1>Welcome to Your Dashboard</h1>
                <nav>
                    <a href="logout.php" class="logout-btn">Logout</a>
                </nav>
            </header>
            
            <main class="dashboard-content">
                <div class="user-info">
                    <h2>User Information</h2>
                    <div class="info-card">
                        <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                        <p><strong>Status:</strong> <span class="status-active">Active</span></p>
                    </div>
                </div>
                
                <div class="dashboard-features">
                    <h2>Dashboard Features</h2>
                    <div class="feature-cards">
                        <div class="feature-card">
                            <h3>Profile Management</h3>
                            <p>Update your profile information and preferences.</p>
                        </div>
                        <div class="feature-card">
                            <h3>Security Settings</h3>
                            <p>Manage your account security and password.</p>
                        </div>
                        <div class="feature-card">
                            <h3>Activity Log</h3>
                            <p>View your recent account activity and login history.</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>