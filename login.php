<?php include('server.php') ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Registration form</title>

        <script>

              function myFunction()
               {
                   var x = document.getElementById("title");

                   if (x.type === "password")
                    {
                        x.type = "text";
                    }
                    
                   else
                    {
                        x.type = "password";
                    }
               }

        </script>

    </head>

    <body>
    
        <div class="container">
            
            <div class="row">
                <div class="col-md-7">
                   <i> <h1>Log in page</h1></i>
                      
                </div>

            <div class="col-md-5">
                <div class="row">
                  <div class="col-md-8">
                      <h3 class="text-right">Log in here</h3>

                  </div>

                  <div class="col-md-6">
                      <span class="glyphicon glyphicon-pencil"></span>
                  </div>

               </div>

               <hr>



               <form method="post" action="login.php">
                

               <div class="col-md-12">
                      <?php include('errors.php'); ?>
                    </div>
  	              
               <div class="row">
               
                       
                   <label class="label col-md-2 control-label">Username</label>
                   <div class="col-md-10">
                       <input type="text" class="form-control" name="username"  placeholder="Username" required />
                    </div>

                </div>

                <div class="row">
               

                   <label class="label col-md-2 control-label">Password</label>
                   <div class="col-md-10">
                       <input type="Password" class="form-control" name="password" id="title"  placeholder="Password" required />
                       <input type="checkbox" onclick="myFunction()">Show Password
                    </div>

                </div>


               

                <button type="submit" class="btn btn-info"  name="login_user">Log in</button>
                <a href="login.php"><div class="btn btn-warning">Cancel</div></a>

              
                <div class="final">
                    <b>Not yet a member?</b><a href="Register.php">Sign up</a>
               </div>
               </form>
            </div>
          </div>




            
    </body>
</html>