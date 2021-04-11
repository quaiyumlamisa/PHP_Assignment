<?php 

      session_start(); 

      if (!isset($_SESSION['username'])) 
      {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
      }


      if (isset($_GET['logout'])) 
      {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
      }

?>


<!DOCTYPE html>
<html>
<head>

	<title>Home</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style1.css">
	
</head>

<body>

    <div class="header">
	        <h1>Home Page</h1>
    </div>


    <div class="content">
        
        <?php if (isset($_SESSION['success'])) : ?>


        <div class="error success" >

            <h3>
                  <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                  ?>
            </h3>

        </div>

            <?php endif ?>

          
            <?php  if (isset($_SESSION['username'])) : ?>


            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>


        </div>

        <div class="float-right">

        
            <a href="index.php?logout='1'"><div class="btn btn-info">logout</div></a>
            
        </div>

        
        <?php endif ?>

		
</body>
</html>
