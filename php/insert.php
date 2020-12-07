<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="../css/insert.css">
    </head>
    <body>
        <?php

            include_once 'connection.php';
            
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $username = $_POST["username"];
            $pwd = md5($_POST["pwd"]);
            $add1 = $_POST["add1"];
            $add2 = $_POST["add2"];
            $city = $_POST["city"];
            $country = $_POST["country"];
            
            $sql = "INSERT INTO users(firstname,lastname,email,username,pwd,add1,add2,city,country) VALUES('$firstname','$lastname','$email','$username','$pwd','$add1','$add2','$city','$country');";
            
            if ($conn->query($sql) == TRUE){
                echo "<h1><center>Registration Successful</center></h1>";
            
            }
            else{
                header('Location: ../html/sign-up.html');
                exit;
            }
            $conn->close();
        ?>
      
        <center>

            <table>
            <tr>
                <td class="td1">First Name</td>
                <td class="td2"> <?php echo "$firstname"; ?> </td>
            </tr>
            <tr>
                <td class="td1">Last Name</td>
                <td class="td2"> <?php echo "$lastname"; ?> </td>
            </tr>
            
            <tr>
                <td class="td1">Email</td>
                <td class="td2"> <?php echo "$email"; ?> </td>
            </tr>
            
            <tr>
                <td class="td1">Username</td>
                <td class="td2"> <?php echo "$username"; ?> </td>
            </tr>
            
            <tr>
                <td class="td1">Address Line 1</td>
                <td class="td2"> <?php echo "$add1"; ?> </td>
            </tr>
            <tr>
                <td class="td1">Address Line 2</td>
                <td class="td2"> <?php echo "$add2"; ?> </td>
            </tr>
            <tr>
                <td class="td1">City</td>
                <td class="td2"> <?php echo "$city"; ?> </td>
            </tr>
            <tr>
                <td class="td1">Country</td>
                <td class="td2"> <?php echo "$country"; ?> </td>
            </tr>
            
        </table>
       
            <a href="../html/home.html"><button>Continue Shoping</button></a> <br>
            <a href="../html/update.html"><button>Reset Your Password</button></a> <br>
            <a href="../html/delete.html"><button>Delete Account</button></a> <br>
            
            <center>
    </body>
    
</html>