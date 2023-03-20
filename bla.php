<?php
session_start();

include 'config.php';
"SELECT * FROM `userstory_3_excel_database`";
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/register.css">
  <title>GildeDEVops Database</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>