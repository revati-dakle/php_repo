<?php
$podName = getenv('HOSTNAME');
$appName = getenv('APP_NAME') ?: 'OpenShift PHP App';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($appName); ?></title>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;

        /* Colorful shaded animated background */
        background: linear-gradient(-45deg, #ff4e50, #fc913a, #f9d423, #24c6dc, #514a9d);
        background-size: 400% 400%;
        animation: gradientBG 10s ease infinite;
    }

    @keyframes gradientBG {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .box {
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        padding: 30px;
        border-radius: 15px;
        width: 60%;
        text-align: center;
        color: white;
        box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    }

    h1 {
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
    }
</style>
</head>

<body>
    <div class="box">
        <h1>🚀 Hello from OpenShift Sandbox</h1>
        <p>Your PHP app is running successfully.</p>

        <p><strong>App Name:</strong> <?php echo htmlspecialchars($appName); ?></p>
        <p><strong>Pod Name:</strong> <?php echo htmlspecialchars($podName); ?></p>

        <p>Beautiful gradient background enabled 🎨</p>
    </div>
</body>
</html>
