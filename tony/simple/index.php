<?php
    session_start();
    if( isset($_GET['exit']) == true )
    {
        session_destroy();
        session_start();
        header('Location: '. "index.php");
    }
    else if( isset($_POST['user']) && isset($_POST['pass']) )
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        if($user == "admin" && $pass == "1234"){
            $_SESSION['logged'] = "1";
        }
    }
?>
<html>
<head>
    <body>
        <?php
            if(isset($_SESSION['logged']) == false) {
                ?>
                <form action="" method="post">
                    user: <br/><input type="text" name="user" value="admin"><br/>
                    pass: <br/><input type="text" name="pass" value="1234"><br/>
                    <br/><input type="submit" name="submit">

                </form>
                <?php
            }else{
                echo "Hi " . $user . "!";

                echo "<br/><a href=\"index.php?exit=true\"><input type=\"submit\" name=\"submit\" value='Logout'></button></a>";

            }
        ?>
    </body>
</head>
</html>