<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>logout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        timerID = window.setTimeout(function() {
            location.assign("index.php");
        }, 3000);
    </script>
</head>

<body>
    <p><?php echo $_SESSION['name'] ?>さん、ご利用ありがとうございました。</p>
    <?php
    session_destroy();
    ?>
</body>

</html>