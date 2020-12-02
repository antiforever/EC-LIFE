<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>E-C LIFE</title>
<!--
Elegance Template
https://templatemo.com/tm-528-elegance
-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body>
    
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>


        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo">
                        EASY-CARE FOR LIFE
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <?php 

                                     if( $_SESSION['mtype'] == "family"){

                                    ?>
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="dashboard.php">Back</a></li>
                                    

                                    <?php
                                    } else{
                                    ?>
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="dashboard.php">Back</a></li>
                                    <?php
                                    }

                                   ?>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="" type="">
        </video>

        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                        <span class="welcome-first animate" data-animate="fadeInUp">Hello, <strong> <?php echo $_SESSION['mname']; ?> </strong></span>
                        <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">

                        <?php
                         if( $_SESSION['mtype'] == "family"){ ?>  
                            <p>Set your FAMILY DEPENDENT</p>
                            <div class="row">
                        <div class="col-md-3 animate" data-animate="fadeInUp">
                                               
                        </div>
                         <div class="col-md-6 animate" data-animate="fadeInUp">
                                       <form method="get" action="peracc.php">
                                            <div class="input-field">
                                               
                                                <label for="medex">Medical Expenses:</label>

                                                    <select name="medex" id="medex" class="form-control" style="color: black">
                                                    <option value="">Choose Percentage:....</option>
                                                    <option value="10">10%</option>
                                                    <option value="12">12%</option>
                                                    <option value="15">15%</option>
                                                    </select>
                                            </div>

                                             <div class="input-field">
                                               
                                                <label for="edex">Education Expenses:</label>

                                                    <select name="edex" id="edex" class="form-control" style="color: black">
                                                    <option value="">Choose Percentage:....</option>
                                                    <option value="10">10%</option>
                                                    <option value="12">12%</option>
                                                    <option value="15">15%</option>
                                                    </select>
                                            </div>


                                             <div class="input-field">
                                               
                                                <label for="midex">Medicine Expenses:</label>

                                                    <select name="midex" id="midex" class="form-control" style="color: black">
                                                    <option value="">Choose Percentage:....</option>
                                                    <option value="10">10%</option>
                                                    <option value="12">12%</option>
                                                    <option value="15">15%</option>
                                                    </select>
                                            </div>


                                             <div class="input-field">
                                               
                                                <label for="groex">Groceries Expenses:</label>

                                                    <select name="groex" id="groex" class="form-control" style="color: black">
                                                    <option value="">Choose Percentage:....</option>
                                                    <option value="10">10%</option>
                                                    <option value="12">12%</option>
                                                    <option value="15">15%</option>
                                                    </select>
                                            </div>
                                            <button class="btn" type="submit" formaction="peracc.php">SAVE</button>
                                        </form>
                                        
                        </div>
                        </div> 
                            <?php
                            } else {
                            ?>
                             <p>Set your LIVELIHOOD PACKAGE</p>
                             <div class="row">
                        <div class="col-md-3 animate" data-animate="fadeInUp">
                                               
                        </div>
                         <div class="col-md-6 animate" data-animate="fadeInUp">
                                       <form method="get" action="macc.php">
                                            <div class="input-field">
                                                <label for="tamount">Choose Package Amount:</label>

                                                    <select name="tamount" id="tamount" class="form-control" style="color: black">
                                                    <option value="">....</option>
                                                    <option value="100000">Php 100,000.00</option>
                                                    <option value="200000">Php 200,000.00</option>
                                                    <option value="300000">Php 300,000.00</option>
                                                    <option value="500000">Php 500,000.00</option>
                                                    <option value="800000">Php 800,000.00</option>
                                                    <option value="1000000">Php 1,000,000.00</option>
                                                   
                                                    </select>
                                            </div>
                                            <div class="input-field">
                                                <label for="ypay">Choose Years of Payment:</label>

                                                    <select name="ypay" id="ypay" class="form-control" style="color: black">
                                                    <option value="">....</option>
                                                    <option value="1">1 year</option>
                                                    <option value="3">3 years</option>
                                                    <option value="5">5 years</option>
                                                    </select>
                                            </div>

                                            <div class="input-field">
                                                <label for="termspay">Payment Term:</label>

                                                    <select name="termspay" id="termspay" class="form-control" style="color: black">
                                                    <option value="">....</option>
                                                    <option value="Monthly">Monthly</option>
                                                    <option value="Quarterly">Quarterly</option>
                                                    <option value="Semi-Anually">Semi-Anually</option>
                                                    <option value="Anually">Anually</option>
                                                    </select>
                                            </div>
                                            


                                            <button class="btn" type="submit" formaction="macc.php">SAVE</button>
                                        </form>
                                        
                        </div>
                        </div> 

                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                      
                
                    </div>
                </div>
            </div>

          

        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>


  </body>
</html>