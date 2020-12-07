<html>
    <head>
         <link rel="stylesheet" type="text/css" href="../css/insert.css">
    </head>
    <body>
        <?php

    include_once 'connection.php';

    $username = $_POST["username"];
    $pwd = md5($_POST["pwd"]);

    $log = "SELECT username,pwd FROM users WHERE username='$username' AND pwd='$pwd';";
    $result = $conn->query($log);

  
        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo "<center>"."<h1>"."Hello ".$row["username"]."</h1>"."<h2>Your Registration Successful</h2>"."</center>";
          }
        } else {
            header('Location: ../html/sign-up.html');
            exit;
        }
    $conn->close();

?>

        <center>
       
            <a href="../html/home.html"><button>Buy Your Products</button></a> <br>
            <a href="../html/update.html"><button>Reset Your Password</button></a> <br>
            <a href="../html/delete.html"><button>Delete Account</button></a> <br>
            
            
    <center>
    </body>
</html>
        
