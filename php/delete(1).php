<html>
    <head>
         <link rel="stylesheet" type="text/css" href="../css/insert.css">
    </head>
    <body>
        <?php

    include_once 'connection.php';

    $username = $_POST["username"];
    $pwd = md5($_POST["pwd"]);

    $deleteacc = "DELETE FROM users WHERE username='$username';";
   
        if ($conn->query($deleteacc) == TRUE){
                 echo "<center>"."<h1>"."Your Account Deleted"."</h1>"."</center>";
            
        }
        else{
            header('Location: ../html/home.html');
            exit;
        }
    $conn->close();

?>

        <center>
       
            <a href="../html/sign-up.html"><button>Create New Account</button></a>
            
    <center>
    </body>
</html>