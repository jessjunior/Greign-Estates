
<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'C:\xampp\htdocs\Greign-Estates-master\vendor\autoload.php';
	//create a new phpMailer object
    if (isset($_POST['submit'])) {
    
	$email = new PHPMailer(TRUE);

	$email->isSMTP();

	$email->SMTPDebug = 0;
	$email->Host = 'smtp.gmail.com'; 
	$email->SMTPAuth = true;  
	$email->Username = 'matetejesse@gmail.com';          
	$email->Password = 'DanBrown1819'; 
	$email->SMTPSecure = 'tls';                  
	$email->Port = 587;    
	//set sender

	$recepientEmail = $_POST['email'];
	$bodyContent = $_POST['message'];
	
	$email->setFrom('info@greignestates.com', 'Greign estates');
	//add recipient
	$email->addAddress('matetejesse@gmail.com', 'jesse');
	//set subject
	$email->Subject = 'New message';
	//fields
	$email->Body    = $bodyContent;
	$bodyContent = wordwrap($bodyContent, 70);
	
	//Set email format to html
	$email->isHTML(true);
	

	if(!$email->send()) {
    	echo 'Message could not be sent.';
    	echo 'Mailer Error: ' . $email->ErrorInfo;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact owner</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
 <div class="container">

            <div class="row">

                <div class="col-xl-8 offset-xl-2 py-5">

                    <h1>Contact Owner </h1>

                    

                    <!-- contact form -->
                    <form id="contact-form" method="post" action="contact_owner.php">
                    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Firstname *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_lastname">Lastname *</label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                      <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Proceed to write your message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" name="submit" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required. 
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