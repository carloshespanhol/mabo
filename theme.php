<?php global $Wcms ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>mabô arquitetura</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico" sizes="any">
        <link rel="apple-touch-icon" href="logo180.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                    <a href="#" class="navbar-brand scroll-top">
                        <div class="logo"></div>
                    </a>

                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-link" data-id="portfolio">Projetos</a></li>
                        <li><a href="#" class="scroll-link" data-id="contact">Contato</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->


    <div id="portfolio" class="page-section">
        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Projetos</h4>
                            <div class="line-dec"></div>
                        </div>
                    </div>
                </div>
                <div class="projects-holder-3">
                    <div class="projects-holder">

                        <div class="row">

                            <div class="col-md-4 col-sm-6 project-item mix workspace">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="prj/1/1s.jpg">
                                  </div>
                                  <a href="prj/1.html">
                                  <div class="hover-effect">
                                    <i class="fa fa-search"></i>
                                  </div>
                                  </a>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 project-item mix workspace">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="prj/2/1s.jpg">
                                  </div>
                                  <a href="prj/2.html">
                                  <div class="hover-effect">
                                    <i class="fa fa-search"></i>
                                  </div>
                                  </a>
                              </div>
                            </div>
                            <div class="col-md-4 col-sm-6 project-item mix technology">
                              <div class="thumb">
                                  <div class="image">
                                    <img src="prj/3/1s.jpg">
                                  </div>
                                  <a href="prj/3.html">
                                  <div class="hover-effect">
                                    <i class="fa fa-search"></i>
                                  </div>
                                  </a>
                              </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div> 
    </div>

    <footer>
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h4>Contato</h4>
                            <div class="line-dec"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="https://instagram.com/mabo.arquitetura?utm_medium=copy_link" target="_blank" rel="noreferrer">
                                        <i class="fa fa-instagram"></i> 
                                    </a>
                                    <span>mabo.arquitetura</span>
                                </li>
                                <li>
                                    <a href="mailto:ola@maboarquitetura.com" target="_blank" rel="noreferrer">
                                        <i class="fa fa-envelope"></i> 
                                    </a>
                                    <span>ola@maboarquitetura.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021 mabô arquitetura</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 50;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>
