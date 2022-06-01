<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "srmf";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful

$sql = "SELECT * FROM `student records management`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
  
    <meta charset="UTF-8">
    <title>Students Information</title>
    
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  
<body style="background-image:url('bg13.jpg');">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <p><img id="logoimg" src="N.png" height="80px"></p>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="adminlogin.php" class="btn btn-primary btn-lg" role="button">Home</a>

          </li>
          <li class="nav-item">
            <a href="display.php" class="btn btn-primary btn-lg" trole="button">Display Students Information</a>
          </li>
          <li class="nav-item">
            <a href="faq.php" class="btn btn-primary btn-lg" role="button">FAQs</a>

          </li>

        </ul>


      </div>
    </div>
  </nav>
    <section>
        <h1>Students Records</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Fathers Name</th>
                <th>Mothers Name</th>
                <th>Address</th>
                <th>Semester</th>
                <th>Roll No.</th>
                <th>Department ID</th>
                <th>CGPI</th>
                <th>SGPI</th>
                <th>Fees</th>
                <th>Timestamp</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
               
   

                // We can fetch in a better way using the while loop
                while($rows=$result->fetch_assoc())
                {
                    // echo var_dump($row);
                    
                    
                
            
            
            
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['sno']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['age']; ?></td>
                <td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['dob']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['phone']; ?></td>
                <td><?php echo $rows['fname']; ?></td>
                <td><?php echo $rows['mname']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td><?php echo $rows['semester']; ?></td>
                <td><?php echo $rows['rollno']; ?></td>
                <td><?php echo $rows['did']; ?></td>
                <td><?php echo $rows['cgpi']; ?></td>
                <td><?php echo $rows['sgpi']; ?></td>
                <td><?php echo $rows['fees']; ?></td>
                <td><?php echo $rows['dt']; ?></td>
            </tr>
            <?php
                
            }
             ?>
        </table>
    </section>
</body>
  
</html>
<?php

$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query

if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
  echo "Connection was successful<br>";
}
?>