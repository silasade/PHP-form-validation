<?php 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $zip=$_POST['zip'];
    $about=$_POST['about'];
    $language=$_POST['languages'];
    if($name=="" || $email=="" || $email==""|| $password==""|| $number==""|| $gender=="" || $about=="" || $zip=="" || $language==""){
        header("Refresh: 3; URL=http://localhost/WebApp/src/index.php");
        echo "Please make sure you fill each box";
        
        
        
    }
    else{
        $con=mysqli_connect('localhost', 'root');
        mysqli_select_db($con,'signin') or die('Failure to communicate with database: '.mysqli_connect_error());
        $query =  "INSERT INTO login (name,email,password,number,gender,zip,about,languages)
            VALUES('$name', '$email', '$password', '$number', '$gender','$zip','$about','$language')";
        $result = mysqli_query($con,$query);
        usleep(10);
        echo "Successful";
        header("Refresh: 3; URL=http://localhost/WebApp/src/index.php");
        
       
    }
    
    

?>
