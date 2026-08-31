<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $member = $_POST["member"] ?? "";
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";

} else {

    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Message Sent — Group 5</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet"
    >

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 20px;

            background: #ffffff;

            color: #2f2f2f;

            font-family:
                "Inter",
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

        }

        .result-card {

            width: min(500px, 100%);

            padding: 35px;

            background: #ffffff;

            border: 1px solid #e5e5e5;

            border-radius: 18px;

            box-shadow:
                0 8px 30px rgba(0, 0, 0, .05);

        }

        .result-label {

            margin-bottom: 10px;

            color: #999999;

            font-size: 11px;

            letter-spacing: 1px;

        }

        h1 {

            margin-bottom: 25px;

            color: #202123;

            font-size: 25px;

            font-weight: 600;

        }

        .info {

            margin-bottom: 16px;

        }

        .info-label {

            display: block;

            margin-bottom: 4px;

            color: #999999;

            font-size: 11px;

        }

        .info-value {

            color: #333333;

            font-size: 13px;

            line-height: 1.6;

            word-wrap: break-word;

        }

        .back-button {

            display: inline-block;

            margin-top: 15px;

            padding: 11px 16px;

            color: #ffffff;

            background: #202123;

            border-radius: 11px;

            text-decoration: none;

            font-size: 12px;

        }

        .back-button:hover {

            background: #343541;

        }

    </style>

</head>

<body>

    <div class="result-card">

        <p class="result-label">
            GROUP 5 · BSIT-3K
        </p>

        <h1>Message Sent!</h1>

        <div class="info">

            <span class="info-label">
                Team Member
            </span>

            <p class="info-value">
                <?php echo htmlspecialchars($member); ?>
            </p>

        </div>

        <div class="info">

            <span class="info-label">
                From
            </span>

            <p class="info-value">
                <?php echo htmlspecialchars($name); ?>
            </p>

        </div>

        <div class="info">

            <span class="info-label">
                Email
            </span>

            <p class="info-value">
                <?php echo htmlspecialchars($email); ?>
            </p>

        </div>

        <div class="info">

            <span class="info-label">
                Message
            </span>

            <p class="info-value">
                <?php echo nl2br(htmlspecialchars($message)); ?>
            </p>

        </div>

        <a href="index.php" class="back-button">
            ← Back to Team Profile
        </a>

    </div>

</body>

</html>