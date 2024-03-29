<?php
session_start();

include 'config.php';


if(isset($_POST['Login'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pass = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        }
    }elseif(
        $error[] = $lang['error_loggin']
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS/index.css">
  <title>GildeDEVops Database</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="index.php" method="post">
                    <a href= "home.html"><ion-icon name="arrow-back-outline" class="arrow"></ion-icon></a>
                    <a href= "index.php?lang=nl"><img src="img/NL.png" alt="NL Flag" class="flag-nl" href="nl-index.html"></a>
                    <a href= "index.php?lang=en"> <img src="img/eng.png" alt="ENG Flag" class="flag-en used"></a>
                    <h2><?php echo $lang['loggi']?></h2>
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">' .$error. '</span>';
                        };
                    };
                    ?>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required>
                        <label for=""><?php echo $lang['E-mail']?></label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for=""><?php echo $lang['passwor']?></label>
                    </div>
                    <div class="forget">
                        <label for=""><a href="#"><?php echo $lang['pforgot']?></a></label>
                      
                    </div>
                    <button name='Login'><?php echo $lang['loggi']?></button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>