<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $rollno = $_POST['rollno'];
    $did = $_POST['did'];
    $cgpi = $_POST['cgpi'];
    $sgpi = $_POST['sgpi'];
    $fees = $_POST['fees'];
    
    $sql = "INSERT INTO `srmf`.`student records management` (`name`, `age`, `gender`,`dob`, `email`, `phone`, `fname`, `mname`, `address`, `semester`, `rollno`, `did`, `cgpi`, `sgpi`, `fees`, `dt`) VALUES ('$name', '$age', '$gender','$dob', '$email', '$phone','$fname','$mname','$address','$semester','$rollno','$did','$cgpi','$sgpi','$fees', current_timestamp());";
    // echo $sql;
    
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <p ><img id ="logoimg" src="N.png" height="80px" ></p>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a href="adminlogin.php"  class="btn btn-primary btn-lg"  role="button" >Home</a>
                
              </li>
              <li class="nav-item">
              <a href="display.php" class="btn btn-primary btn-lg" role="button" >Display Students Information</a>
              </li>
              <li class="nav-item">
            <a href="faq.php" class="btn btn-primary btn-lg" role="button">FAQs</a>

          </li>
              
            </ul>
            
           
          </div>
        </div>
      </nav>
      <div class="container">
      <p ><img id ="logoimg" src="N.png" height="140px" ></p>
    
    <div class="container" align="center">
    <marquee width="60%" direction="left" align="center" height="100px">
    <h1>Welcome to NIT Hamirpur</h1>
</div>
 
   

</marquee> 
        <h1 style="color:white">Enter your details </h1>
        <?php
        
    ?>
    <div class="container" id="container1">
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="date" name="dob" id="dob" placeholder="Enter your Date of Birth">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no">
            <input type="text" name="fname" id="fname" placeholder="Enter your fathers name">
            <input type="text" name="mname" id="mname" placeholder="Enter your mothers name">
            <input type="text" name="address" id="address" placeholder="Enter your address">
            <input type="text" name="semester" id="semester" placeholder="Enter your semester">
            <input type="text" name="rollno" id="rollno" placeholder="Enter your roll no">
            <input type="text" name="did" id="did" placeholder="Enter your department id">
            <input type="text" name="cgpi" id="cgpi" placeholder="Enter your CGPI">
            <input type="text" name="sgpi" id="sgpi" placeholder="Enter your SGPI">
            <input type="text" name="fees" id="fees" placeholder="Enter your fees">
            
            <button class="btn">Submit</button> 
        </form>
    </div>
      </div>


        
    <script src="scriptadminlogin.js"></script>
    
    
</body>
</html>
