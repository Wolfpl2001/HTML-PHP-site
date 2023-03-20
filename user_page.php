<?php
session_start();
include 'config.php';
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
                <th><a href="home.html"><?php echo $lang['staff']?></a></th>
                <th><a><?php echo $lang['Activities']?></a></th>
                <th><a><?php echo $lang['Assignments']?></a></th>
                <th><a href=""> <?php echo $lang['Customers']?></a></th>
              </tr>
            </table>
        </div>
        <div class="db">
          <h1 class=h1><?php echo $lang['db_info']?>: <?php echo $lang['staff']?></h1>
          <?php
          include 'config.php';
          $result = $conn->query($sql);
          if ($result == true) {
            if ($result->num_rows > 0) {
            echo "<table class='table-db'><tr class='stick'><th>ID</th><th>Name</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Geboortedatum</th><th>Functie</th><th>Werkmail</th><th>Kantoorruimte</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td> " . $row["id"]. "</td><td>" . $row["Voornaam"]. "</td><td> " . $row["Tussenvoegsel"] ."</td><td>" . $row["Achternaam"]. "</td><td>" . $row["Geboortedatum"]."</td><td>" . $row["Functie"]."</td><td>" . $row["Werkmail"]. "</td><td>". $row["Kantoorruimte"]."</td>";
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
