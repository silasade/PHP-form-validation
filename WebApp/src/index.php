<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css ?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <div class="img">
       <img src="CamScanner 02-22-2021 11.16.37_1.jpg" alt="image not found">
    </div>
    
    <div class="body">
    <form action="connect.php ?v=<?php echo time(); ?>" method="post">
        
        <p>Name: <input type="text" name="name" placeholder="your name" id="name"></p>
        <p id="Name"></p>
        <p>Email: <input type="email" name="email"  placeholder="your email" id="email"></p>
        <p id="Email"></p>
        <p>Password: <input type="password" name="password"  placeholder="password" id="password"></p>
        <p id="Password"></p>
        <p>Phone Number: <input type="tel" name="number" id="number"></p>
        <p id="tel"></p>
        <p>Gender: <div class="gender">
                        <p>Male: <input type="radio" name="gender"  value="male"></p>
                        <p>Female: <input type="radio" name="gender"  value="female"></p>
                        <p>Other: <input type="radio" name="gender"  value="others"></p>

                    </div>
        </p>
        <p>
            language <select name="languages" id="lan">
            <option value="select">Selcect language</option>
            <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 0);
                $conn=mysqli_connect('localhost','root');
                $languages=$_POST['languages'];
                mysqli_select_db($conn,'signin') or die("Failed to connect to the server: ".mysqli_connect_error());
                $query="SELECT *From spoken_languages";
                $result = mysqli_query($conn,$query);
                $aantal  = $result->num_rows;
                
                while ($row = mysqli_fetch_assoc($result)) 
                { 
                    ?>
                    <option value="<?php echo $row['language']; ?>"><?php echo $row['language']; ?></option>
                <?php 
            } 
            ?>
            </select>
        </p>
        <p>
            Zip Code: <input type="text" name="zip" id="zip">
        </p>
        <p id="Zip"></p>
        <p>
            About: <textarea name="about"  id="area" cols="30" rows="10" placehoder="write about yourself"></textarea>
        </p>
        <p id="Area"></p>
        <div class="rec">
            <div>
                <input type="submit" value="Register" onclick="clicked()" id="button">
            </div>
            <div>
                <a href="./records.php">Go to Records</a>
            </div>
        </div>
        
    </form>
    </div>
    
    <script src="./index.js ?v=<?php echo time(); ?>"></script>
</body>
</html>