<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head> 
<script language = "javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php include 'topnav_user.php';?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">                
                <form action="php/info_insert.php" method="POST">
                    <h2 class="text-center">INFORMATION REGISTER</h2>
                    <input type="hidden" name="id" value="
                    <?php 
                        include 'php/db.inc.php';
          
                        $query_user = new MongoDB\Driver\Query([]);
                        $rows = $manager->executeQuery($dbname, $query_user);
          
                        foreach($rows as $row){
                          if(!strcmp($row->username,$_SESSION['username'])){
                            echo $row->_id;
                          break;
                          }   
                        }                    
                         
                    ?>">
                    <input type="hidden" name="firstname" value="
                    <?php 
                        include 'php/db.inc.php';
          
                        $query_user = new MongoDB\Driver\Query([]);
                        $rows = $manager->executeQuery($dbname, $query_user);
          
                        foreach($rows as $row){
                          if(!strcmp($row->username,$_SESSION['username'])){
                            echo $row->firstname;
                          break;
                          }   
                        }                    
                         
                    ?>">
                    <input type="hidden" name="lastname" value="
                    <?php 
                        include 'php/db.inc.php';
          
                        $query_user = new MongoDB\Driver\Query([]);
                        $rows = $manager->executeQuery($dbname, $query_user);
          
                        foreach($rows as $row){
                          if(!strcmp($row->username,$_SESSION['username'])){
                            echo $row->lastname;
                          break;
                          }   
                        }                    
                         
                    ?>">
                    <input type="hidden" name="username" value="
                    <?php 
                        include 'php/db.inc.php';
          
                        $query_user = new MongoDB\Driver\Query([]);
                        $rows = $manager->executeQuery($dbname, $query_user);
          
                        foreach($rows as $row){
                          if(!strcmp($row->username,$_SESSION['username'])){
                            echo $row->username;
                          break;
                          }   
                        }                    
                         
                    ?>">
                    <input type="hidden" name="password" value="
                    <?php 
                        include 'php/db.inc.php';
          
                        $query_user = new MongoDB\Driver\Query([]);
                        $rows = $manager->executeQuery($dbname, $query_user);
          
                        foreach($rows as $row){
                          if(!strcmp($row->username,$_SESSION['username'])){
                            echo $row->password;
                          break;
                          }   
                        }                    
                         
                    ?>">
                    
                    <div class="form-group">
                        <label for="dep">Department Name</label>
                        <input type="text" class="form-control" id="dep" name="dep" placeholder="Enter Department Name">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation">
                    </div>
                    <div class="form-group">
                        <label for="per_email">Personel Email</label>
                        <input type="text" class="form-control" id="per_email" name="per_email" placeholder="Enter Personel Email">
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                        <label for="office_no">Office Number</label>
                        <input type="text" class="form-control" id="office_no" name="office_no" placeholder="Enter office number">
                    </div>
                    <input type="submit" value="SUBMIT" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- <script>
        var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script> -->
</body>
</html>