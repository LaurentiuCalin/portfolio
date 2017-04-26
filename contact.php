<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='shortcut icon' href='img/icon.png'>
    <link href="https://fonts.googleapis.com/css?family=Sansita" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>
</head>
<body>

<!-- Navigation -->
<nav id="navigation" class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="nav-links">
                <li onclick="Contact()"><a href="contact.php">CONTACT</a></li>
                <li onclick="Resume()"><a href="resume.html">RESUME</a></li>
                <li onclick="Work()"><a href="index.php">WORK</a></li>
            </ul>
            <ul class="nav navbar-nav" id="nav-identity">
                <li><a href="index.php"><img src="img/w-icon.png" alt=""><span
                                id="identity-name"> laurentiu<b>durnea</b></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<!--Content-->

<div class="container">
    <div class="col-md-6 col-md-offset-3" id="contact-container">
        <div class="form-area">
            <form role="form" action="contact-form.php" method="post">
                <h3>Contact me!</h3>
                <h5>Fields marked with * are required</h5>
                <?php

                if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                    $error = $_SESSION['error'];
                    unset($_SESSION['error']);
                    echo "<h5 class='alert alert-danger'>" . $error . "<h5>";
                }

                ?>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message*"
                              maxlength="140"
                              rows="7"></textarea>
                    <span class="help-block"><p id="characterLeft"
                                                class="help-block ">You have reached the limit</p></span>
                </div>

                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Send</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <p>Copyright &copy; Laurentiu Durnea 2017</p>
        </div>
    </div>
    <!-- /.row -->
</footer>

<?php
if (isset($_SESSION['success'])) {
    if ($_SESSION['success'] == true) {
        unset($_SESSION['success']);
        ?>
        <script>
            swal(
                'Success!',
                'the message was sent',
                'success'
            )
        </script><?php
    } elseif ($_SESSION['success'] == false) {
    unset($_SESSION['success']);
    ?>
        <script>
            swal(
                'Oops...',
                'Something went wrong! Please try again.',
                'error'
            )
        </script><?php
    }
}
?>

<script>

    $(document).ready(function () {
        $('#characterLeft').text('140 characters left');
        $('#message').keydown(function () {
            var max = 140;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
                var ch = max - len;
                $('#characterLeft').text(ch + ' characters left');
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
    });
</script>
</body>
</html>