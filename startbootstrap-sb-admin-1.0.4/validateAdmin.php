<?php

        // Start the session
        session_start();

        $un = $_POST['email'];
        $pw = $_POST['password'];
        
        $con=mysqli_connect("localhost","root","","placement");
        // Check connection
        if (mysqli_connect_errno())
          {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }

           
        $result = mysqli_query($con,"SELECT * FROM admin WHERE username='".$un."' and password='".$pw."'");

        while($row = mysqli_fetch_array($result))
          {
            $_SESSION["un"] = "admin";
          
            header("Location: index.html");
            exit;
          }             
     
        mysqli_close($con);
        header("Location: login.html");
        exit;

?>
