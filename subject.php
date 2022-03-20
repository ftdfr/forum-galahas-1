<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style-pc.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="#">
    <title>Forum</title>
</head>
<body>
    <script type="text/javascript">

        var boxLogin = document.getElementById("box-login");
        var btn = document.getElementById("connect-button");
        var span = document.getElementById("close-cross");

        btn.onclick = function open() {
            document.getElementById("box-login").style.display = "block";
        };

        span.onclick = function close() {
            document.getElementById("box-login").style.display = "none";
        };

    </script>
    <div class="site">    
        <?php include 'includes/nav.php'; ?>
        <div class="body">
            <div id="box-login" class="box-login">
                <div class="box-login-content">
                    <span class="close" id="close-cross">&times</span>
                    <?php
                    require('includes/config.php');

                    if (isset($_POST['username'])){

                        $username = stripslashes($_REQUEST['username']);
                        $username = mysqli_real_escape_string($conn, $username);
                        $password = stripslashes($_REQUEST['password']);
                        $password = mysqli_real_escape_string($conn, $password);
                        $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
                        $result = mysqli_query($conn,$query) or die(mysql_error());
                        $rows = mysqli_num_rows($result);

                        if($rows==1){
                            $_SESSION['username'] = $username;
                            header("Location: dashboard.php");
                        }else{
                            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
                        }
                    }?>
                    
                    <div id="login">
                        <form class="box" action="" method="post" name="login">
                            <h1 class="box-logo box-title"><a href="#">Forum</a></h1>
                            <h1 class="box-title">Connexion</h1>
                    
                            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
                            <input type="password" class="box-input" name="password" placeholder="Mot de passe">
                            <input type="submit" value="Connexion " name="submit" class="box-button">
                            <p class="box-register">Vous êtes nouveau ici ? <a href="register.php">S'inscrire</a></p>
                        
                            <?php if (! empty($message)) { 
                                ?><p class="errorMessage"><?php echo $message; ?></p><?php 
                            } ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="subjects">
                <div class="wrapper">
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Naruto</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">One Piece</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Dragon Ball</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Bleach</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet E</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet F</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet G</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet H</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet I</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet J</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet K</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet L</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet M</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet N</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet O</a></div>
                    <div class="subjects-names"><a class="subject-link" href="sujet-a.php">Sujet P</a></div> 
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
