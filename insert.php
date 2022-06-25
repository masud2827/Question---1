<!DOCTYPE html>
<html>
 
<head>
    <title>Insert</title>
</head>
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "info");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['name'];
        $id = $_REQUEST['id'];
        $age =  $_REQUEST['age'];
        $user_name = $_REQUEST['user_name'];
        $password = $_REQUEST['password'];
         
        // Performing insert query execution
        $sql = "INSERT INTO user_info  VALUES ('$name',
            '$id','$age','$user_name','$Password')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Data Stored in a Database Successfully.";
 
            echo nl2br("\n$name\n $id\n "
                . "$age\n $user_name\n $password");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }   
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>