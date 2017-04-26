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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div id="cms" class="proj-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#webshopModal">
                    <div class="overlay">
                        web-shop with CMS <br> JS AJAX PHP
                    </div>
                </a>
            </div>
            <div id="pw" class="proj-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#portfolioModal">
                    <div class="overlay">
                        portfolio website <br> HTML CSS JS
                    </div>
                </a>
            </div>
            <div id="jsgame" class="proj-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#gameModal">
                    <div class="overlay">
                        browser game <br> JS
                    </div>
                </a>
            </div>
            <div id="capp" class="proj-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <a data-toggle="modal" data-target="#webappModal">
                    <div class="overlay">
                        web application <br> C#
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal webshop-->
<div id="webshopModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Webshop</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/shop5.PNG" alt="" class="img-responsive">
                        <p>Online shop created using HTML, CSS, JS and PHP.</p>
                        <p>It allows the user to register and login in order to add products to a wish-list and also
                            change some personal settings.</p>

                        <p>As an administrator you can add and remove products and you also have an overview of the
                            registered users.</p>
                        <p>The information is saved and retrieved from JSON files using AJAX calls and PHP.</p>
                        <div class="row col-md-12 center-images-row">
                            <img src="img/shop2.jpg" alt="" class="col-md-5 img-responsive">
                            <img src="img/shop4.jpg" alt="" class="col-md-5 img-responsive">
                        </div>
                        <div class="row col-md-12">
                            <center>
                                <p>If you want to see the code or the website, they are available on the following
                                    links:<br>
                                    <a href="https://github.com/LaurentiuCalin/onlineShopCMS" target="_blank">
                                        <i class="fa fa-github"> </i> Github</a>
                                    <span>|</span>
                                    <a href="/webshop/index.html" target="_blank">
                                        <i class="fa fa-external-link"> </i> Website</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--end modal webshop-->

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
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/pw1.PNG" alt="" class="img-responsive">
                        <p>
                            I have created this website in order to gather the projects that I had worked on until that
                            point and also to illustrate the skills and abilities that I have.
                        </p>
                        <p>
                            It is created in an organized manner in order to be changed and modified efficiently if
                            necessary. It was created using HTML and CSS and a bit of JS.
                        </p>
                        <img src="img/pw2.PNG" alt="" class="img-responsive">
                        <div class="row col-md-12">
                            <center>
                                <p>If you want to see the code or the website, they are available on the following
                                    links:<br>
                                    <a href="https://github.com/LaurentiuCalin/portfolioWebsiteV1.git" target="_blank">
                                        <i class="fa fa-github"> </i> Github</a>
                                    <span>|</span>
                                    <a href="/portfolio/index.html" target="_blank">
                                        <i class="fa fa-external-link"> </i> Website</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--end modal portfolio-->

<!-- Modal game-->
<div id="gameModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Browser game</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/game1.PNG" alt="" class="img-responsive">
                        <p>
                            Crown Quest is a browser based game which combines 3 types of genres, RPG, action-adventure
                            and arcade. <br><br>
                            It was implemented using tiles in JSON files and JS, with th CreateJS framework.
                            The goal of the game is to recover an artifact from the negative character which is
                            encountered several times during the game play. <br><br>
                            The progress is saved in the local storage
                            of the browser in order for the players to be able to play the game at different times. <br><br>
                            The 8bit graphics is present throughout the game except in the shooter parts.<br><br>
                            The player has access to an inventory and a shop where the player can buy different guns and
                            also lifes and ammunition for the quests.
                        </p>

                        <img src="img/game2.PNG" alt="" class="img-responsive">
                        <div class="row col-md-12">
                            <center>
                                <p>If you want to see the code or the website, they are available on the following
                                    links:<br>
                                    <a href="https://github.com/LaurentiuCalin/browser-game.git" target="_blank">
                                        <i class="fa fa-github"> </i> Github</a>
                                    <span>|</span>
                                    <a href="/browserGame/miniProjectJavaScript/index.html" target="_blank">
                                        <i class="fa fa-external-link"> </i> Website</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
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
                <div class="row">
                    <div class="col-md-12">
                        <img src="img/pw1.PNG" alt="" class="img-responsive">
                        <p>
                            I have created this website in order to gather the projects that I had worked on until that
                            point and also to illustrate the skills and abilities that I have.
                        </p>
                        <p>
                            It is created in an organized manner in order to be changed and modified efficiently if
                            necessary. It was created using HTML and CSS and a bit of JS.
                        </p>
                        <img src="img/pw2.PNG" alt="" class="img-responsive">
                        <div class="row col-md-12">
                            <center>
                                <p>If you want to see the code or the website, they are available on the following
                                    links:<br>
                                    <a href="https://github.com/LaurentiuCalin/companyOrganisationC.git"
                                       target="_blank">
                                        <i class="fa fa-github"> </i> Github</a>
                                </p>
                            </center>
                        </div>
                    </div>
                </div>
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
            <p>Copyright &copy; Laurentiu Durnea 2017</p>
        </div>
    </div>
    <!-- /.row -->
</footer>


</body>
</html>