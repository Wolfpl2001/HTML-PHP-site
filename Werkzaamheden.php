<?php
session_start();
include 'config.php';
$sql = "SELECT `ID`, `Voornaam`, `Tussenvoegsel`, `Achternaam`, `Datum`, `Starttijd`, `Pauze`, `Eindtijd`, `Werkzaamheden`, `Totaal Uren` FROM `werkzaamheden`";
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
          <a href="Werkzaamheden.php?lang=en"><img src="img/eng.png" alt="Eng Lang Flag" class="flag-en"></a>
          <a href="Werkzaamheden.php?lang=nl"><img src="img/nl.png" alt="NL Lang Flag" class="flag-nl"></a>
        </div>
        <div class="db">
          <h1 class=h1><?php echo $lang['db_info']?>: <?php echo $lang['Customers']?></h1>
          <?php
          include 'config.php';
          $result = $conn->query($sql);
          if ($result == true) {
            if ($result->num_rows > 0) {
              echo "<table class='table-db'><tr class='stick'><th>ID</th><th>First name</th><th>Tussenvoegsel</th><th>Second name</th><th>Datum</th><th>Start time</th><th>Break</th><th>End time</th><th>Activities</th><th>Total hours</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr><td>". $row["ID"]."</td><td>" . $row["Voornaam"]. "</td><td>". $row["Tussenvoegsel"]. "</td><td>" . $row["Achternaam"]."</td><td>" . $row["Datum"]."</td><td>" . $row["Starttijd"]."</td><td>" . $row["Pauze"]."</td><td>" . $row["Eindtijd"]."</td><td>" . $row["Werkzaamheden"]."</td><td>". $row["Totaal Uren"]."</td></tr>";
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