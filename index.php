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
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="main.js"></script>

</head>
<body>

<!-- Navigation -->
<nav id="navigation" class="navbar navbar-default navbar-fixed-top transparent">
    <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="nav-links">
                <li onclick="Contact()"><a href="contact.php">CONTACT</a></li>
                <li onclick="Resume()"><a href="resume.php">RESUME</a></li>
                <li onclick="Work()"><a href="index.php">WORK</a></li>
            </ul>
            <ul class="nav navbar-nav" id="nav-identity">
                <li><a href="index.php"><img src="img/w-icon.png" alt=""><span
                                id="identity-name"> laurentiu<b>durnea</b></span></a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="page-content">
    <header id="header" class="col-md-12">
        <div class="row">
            <h1>LAURENTIU CALIN DURNEA <br/> PORTFOLIO</h1>
        </div>
        <div class="row">
            <p id="arrow-down-projects"><span onclick="ArrowClick()"
                                              class="glyphicon glyphicon-chevron-down glyphicon-lg"></span></p>
        </div>
    </header>
    <div id="projects-container" class="container">
        <div class="projects col-md-12">
            <div id="cms" class="proj-container col-md-6">
                <a data-toggle="modal" data-target="#webshopModal">
                    <div class="overlay">
                        web-shop with CMS <br> JS AJAX PHP
                    </div>
                </a>
            </div>
            <div id="pw" class="proj-container col-md-6">
                <a data-toggle="modal" data-target="#portfolioModal">
                    <div class="overlay">
                        portfolio website <br> HTML CSS JS
                    </div>
                </a>
            </div>
            <div id="jsgame" class="proj-container col-md-6">
                <a data-toggle="modal" data-target="#gameModal">
                    <div class="overlay">
                        browser game <br> JS
                    </div>
                </a>
            </div>
            <div id="capp" class="proj-container col-md-6">
                <a data-toggle="modal" data-target="#webappModal">
                    <div class="overlay">
                        web application <br> C#
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal portfolio-->
<div id="portfolioModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Portfolio website</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--end modal portfolio-->

<!-- Modal webshop-->
<div id="webshopModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">webshop</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--end modal webshop-->

<!-- Modal game-->
<div id="gameModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">game</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--end modal game-->

<!-- Modal webapp-->
<div id="webappModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">webapp</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--end modal webapp-->

<!-- Footer -->
<footer class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <p>Copyright &copy; My Website 2017</p>
        </div>
    </div>
    <!-- /.row -->
</footer>


</body>
</html>