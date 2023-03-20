<?php
session_start();
include 'config.php';
$sql = "SELECT Achternaam, Voornaam, Adres, Tel FROM `Klanten`";
?>

<!DOCTYPE html>
<html lang="en">
  <meta content="width=device-width">
<head>
  <link rel="stylesheet" href="CSS/user-site.css">
  <title>GildeDEVops</title>
</head>
<body>
    <section>
        <div class="main-menu">
          <img src="img/logo.jpg" alt="logo" class="logo">
            <table class="table">
              <tr class="table">
                <th><a href="admin_page.php"><?php echo $lang['staff']?></a></th>
                <th><a href="Werkzaamheden.php"><?php echo $lang['Activities']?></a></th>
                <th><a href="Opdrachten.php"><?php echo $lang['Assignments']?></a></th>
                <th><a href=""> <?php echo $lang['Customers']?></a></th>
              </tr>
            </table>
          <a href="klanten.php?lang=en"><img src="img/eng.png" alt="Eng Lang Flag" class="flag-en"></a>
          <a href="klanten.php?lang=nl"><img src="img/nl.png" alt="NL Lang Flag" class="flag-nl"></a>
        </div>
        <div class="db">
          <h1 class=h1><?php echo $lang['db_info']?>: <?php echo $lang['Customers']?></h1>
          <?php
          include 'config.php';
          $result = $conn->query($sql);
          if ($result == true) {
            if ($result->num_rows > 0) {
              echo "<table class='table-db'><tr class='stick'><th>Firstname </th><th>Secondname</th><th>Adres</th><th>Tel</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>". $row["Achternaam"]."</td><td>" . $row["Voornaam"]. "</td><td>". $row["Adres"]. "</td><td>" . $row["Tel"]."</td></tr>";
              }
            } else {
              echo "0 results";
            }
          } else {
            echo "Error";
          }
?>
</table>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>