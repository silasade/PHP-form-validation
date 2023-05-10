<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css ?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
<div class="navbar">
        <div>
            <h1>Records</h1>
        </div>
        <div>
            <br>
            <br>
            <form action="search.php ?v=<?php echo time(); ?>" method="post">
                <input type="search" name="search" id="">
                <input type="submit" value="Search">
        
            </form>
    </div>
    </div> 
    <a href="./records.php">Go to Records</a>
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'signin') or die("Failed to connect to the server: ".mysqli_connect_error());
    $query="SELECT *From login";
    $result = mysqli_query($conn,$query);
    $aantal  = $result->num_rows;
    
    
    $search= $_POST['search'];
    ?>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Email <Address></Address></th>
      <th>Phone number</th>
      <th>Gender</th>
      <th>Zip Code</th>
      <th>About</th>
      <th>Language</th>
    </tr>
  </thead>
  <tbody>          
    
    <?php
    
    
        while ($row = mysqli_fetch_assoc($result)):
        $Name=$row["name"];
        $Email=$row["email"];
        $Phone=$row["number"];
        $Password=$row["password"];
        $Gender=$row["gender"];
        $Lang=$row["languages"];
        $Zip=$row["zip"];
        $About=$row["about"];
        $lang=$row["languages"]; 
        if ($search===$Name|| $search===$Email || $search===$Phone || $search===$Gender || $search===$Zip || $search===$About ||$search===$lang): 
            $Name1=$Name;
            $Email1=$Email;
            $Phone1=$Phone;
            $Gender1=$Gender;
            $Zip1=$Zip;
            $About1=$About;
            $Lang= $lang;
        
        ?>
            <tr>
            <td><?php echo $Name1; ?></td>
            <td><?php echo $Email1; ?></td>
            <td><?php echo $Phone1; ?></td>
            <td><?php echo $Gender1; ?></td>
            <td><?php echo $Zip1; ?></td>
            <td><?php echo $About1; ?></td>
            <td><?php echo $lang; ?></td>

            
        </tr>
        <?php endif;
                ?>
        <?php
            
            ?>
        <?php endwhile; ?>
        </tbody>
        </table>
        <div class="btn">
        <button><a href="./index.php">Go to login page</a></button>
        </div>
        
</body>
</html>
