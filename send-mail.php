<html>

<head>
    <title>Form with php || E-mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container jumbotron">
        <br>
        <center>
            <h4>Registration Form</h4>
        </center>
        <div class="row">
            <div class="col-md-2">

            </div class="modal fade">
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name"
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Enter Your True Email" name="email"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Contact:</label>
                        <input type="number" class="form-control" placeholder="Enter Your Mobile No" name="contact"
                            autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Percentage:</label>
                        <input type="number" placeholder="Enter Your 12 percentage" class="form-control"
                            name="percentage" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Date Of Birth:</label>
                        <input type="date" class="form-control" name="dob" autocomplete="off">
                    </div>




                    <label for="">Gender:</label>
                    <div class="form-group container">
                        <label>Male:</label>
                        <input type="radio" name="gender" autocomplete="off">

                        <label>Female:</label>
                        <input type="radio" name="gender" autocomplete="off">
                    </div>

                    <label for="">Branch:</label>
                    <div class="form-group container">
                        <label>BCA:</label>
                        <input type="checkbox" name="BCA">

                        <label>BSC IT:</label>
                        <input type="checkbox" name="BSC_IT">

                        <label>BBA:</label>
                        <input type="checkbox" name="BBA">

                        <label>MCA:</label>
                        <input type="checkbox" name="MCA">

                        <label>MSC IT:</label>
                        <input type="checkbox" name="MSC_IT">

                        <label>B.TECH:</label>
                        <input type="checkbox" name="B_TECH">

                        <label>M.TECH:</label>
                        <input type="checkbox" name="M_TECH">





                    </div>

                    <label for="">Hobbies:</label>
                    <div class="form-group container">
                        <label>Coding:</label>
                        <input type="checkbox" name="coding">

                        <label>Research:</label>
                        <input type="checkbox" name="research">

                        <label>Self-Study:</label>
                        <input type="checkbox" name="self_study">

                        <label>Travelling:</label>
                        <input type="checkbox" name="travelling">

                        <label>Music:</label>
                        <input type="checkbox" name="music">

                        <label>Freelancing:</label>
                        <input type="checkbox" name="freelancing">

                        <label>Trip:</label>
                        <input type="checkbox" name="trip">





                    </div>


                    <div class="form-group">
                        <label>Address:</label>
                        <textarea name="message" class="form-control" placeholder="Message" rows="3"></textarea>
                    </div>

                    <label for="">Terms and Condition:</label>
                    <br>
                    <p>Give us to promise that after admission don't disturb or don't misbehave front of any person</p>
                    <div>
                        <strong>Yes</strong> <input type="radio" name="yes">
                        <strong>No</strong> <input type="radio" name="no">
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" id="myBtn" class="btn btn-outline-success btn-lg"
                            name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




</body>

</html>

<?php


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $percentage = $_POST['percentage'];
    $message = $_POST['message'];
    $dob = $_POST['dob'];
    // $gender = $_POST['gender'];
    // $BCA = $_POST['BCA'];
    // $BSC_IT = $_POST['BSC_IT'];
    // $BBA = $_POST['BBA'];
    // $MCA = $_POST['MCA'];
    // $MSC_IT = $_POST['MSC_IT'];
    // $B_TECH = $_POST['B_TECH'];
    // $M_TECH = $_POST['M_TECH'];
    // $coding = $_POST['coding'];
    // $research = $_POST['research'];
    // $self_study = $_POST['self_study'];
    // $travelling = $_POST['travelling'];
    // $music = $_POST['music'];
    // $freelancing = $_POST['freelancing'];
    // $trip = $_POST['trip'];
    // $yes =$_POST['yes'];
    // $no = $_POST['no']; 
    
    
    
    
    
    
    
    

    if($name=='' || $email=='' || $contact=='' || $message=='' || $percentage=='' || $dob==''){
        echo "<script>alert('All Fields are required')</script>";
    }
    else{
        $from = "Shivam Vora";
        $webmaster = "shivampatel27102001@gmail.com";
        $to = "shivamvora3032003@gmail.com";
        $subject = "Contact to Shivam vora";


        $headers = "From: ". $from . "<" . $webmaster . ">\r\n";
        $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-$8859-1\r\n";

        $message .= "<html><body>";
        $message .= "<h1>New User regristration received.</h1>";
        $message .= "<p>Name: ".$_POST['name']."</p>";
        $message .= "<p>Email: ".$_POST['email']."</p>";
        $message .= "<p>Contact: ".$_POST['contact']."</p>";
        $message .= "<p>Percentage: ".$_POST['percentage']."</p>";
        $message .= "<p>Address: ".$_POST['message']."</p>";
        $message .= "<p>Address: ".$_POST['dob']."</p>";
        

        

        $message .= "</html></body>";
        sendEmail($to, $subject, $message,$headers);
        // $sendmail = mail($to,$subject,$message,$headers);

        echo "<script>window.open('index.php?sent=Your form hase been submited','_self')<script>";

    }
}

function sendEmail($to, $subject, $message) {
    require_once("class.phpmailer.php");
    require_once("class.smtp.php");

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = false; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    //mail via gmail
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    //mail via hosting server


    $mail->IsHTML(true);
    $mail->Username = 'shivampatel27102001@gmail.com';
    $mail->Password = '9638334295';
    $mail->SetFrom('shivamvora3032003@gmail.com', 'demo_form');

    $mail->AddReplyTo('shivamvora3032003@gmail.com', 'demo_form');
    $mail->Subject = 'Regitstration form';
    $mail->Body = $message;
    $mail->AddAddress($to);

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true
        )
    );
    $result = $mail->Send();

    if (!$result) {
         echo "Mailer Error: " . $mail->ErrorInfo;
          exit;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . SITENAME . ' <' . MAIL_USERNAME . '>' . "\r\n";
        $headers .= 'Reply-To: ' . MAIL_USERNAME . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        $result = mail($to, $subject, $message, $headers);
        $result = false;
    }
    return $result;
}




?>