<?php
    session_start();
	include 'connect.php';

    if(!isset($_SESSION['email'])){
        header("location: login.php");
    }

     if (isset($_POST['submit'])) {
            # code...
            $newName = $_POST['name'];
            $newSurname = $_POST['surname'];
            $newEmail = $_POST['email'];
            $newPass = $_POST['password'];

            //$id = $_POST['id']; 

            $sql = "UPDATE users SET firstname ='$newName', lastname = '$newSurname', email = '$newEmail' , password = '$newPass' WHERE email='$email'" ; 
            $res = mysqli_query($con,$sql) or die('Could not update'.mysqli_error);
        
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>User profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
 <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Update Profile </h1>

                    

                    <!-- update profile form -->
                    <form  method="post" action="login.php">
                    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Password *</label>
                    <input id="form_password" type="password" name="password" class="form-control" placeholder="Enter new password *" required="required" data-error="Valid password is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" name="submit" value="Update">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                     
            </div>
        </div>
    </div>	
    
                    </form> 

                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
</body>
</html>