<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HOME</title>
    <!-- Include CSS File Here -->
  <link rel="stylesheet" href="styleadminlogin.css" />
  <!-- Include JS File Here -->
  <script src="scriptadminlogin.js"></script>
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
  <div class="container" id="container1" >
    <div class="main">
      <div class="text-center">
        <img src="1q.jpg" class="rounded" alt="" height="120" width="120">

        <h2>Administration Login</h2><br>
        <form id="form_id" method="post" name="myform">
          
          <h6>User Name :<h6>
          <input type="text" name="username" id="username" placeholder="Enter User Name" /><br>
          <h6>Password :<h6>
          <input type="password" name="password" id="password" placeholder="Enter Password" />
          <input type="button" value="Login" id="submit" onclick="validate()" />
        </form>
      </div>
    </div>
  </div>
  
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>




  
