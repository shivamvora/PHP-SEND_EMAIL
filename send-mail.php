<html>
<head>
    <title>Form with php || E-mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br>
        <center><h4>Send Mail from Contact Page using PHP</h4></center>
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
                        <label>Message:</label>
                        <textarea name="message" class="form-control" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" id="myBtn" class="btn btn-outline-success btn-lg" name="submit">Submit</button>
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
    $message = $_POST['message'];

}

?>