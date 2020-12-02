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
                                    <li data-menuanchor="slide02"><a href="#slide02">My Pakcage</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Dependents</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Benefits and Awards</a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05">Farmers Care-Support</a></li>
                                    <li data-menuanchor="slide06"><a href="#slide06">Food Nutrition Tips</a></li>
                                    <li data-menuanchor="slide07"><a href="#slide07">My BMI</a></li>
                                    <li data-menuanchor="slide08"><a href="#slide08">Others</a></li>
                                    <li data-menuanchor=""><a href="login.php">Log-Out</a></li>

                                    <?php
                                    } else{
                                    ?>
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">My Pakcage</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">Benefits and Awards</a></li>
                                    <li data-menuanchor="slide06"><a href="#slide06">Food Nutrition Tips</a></li>
                                    <li data-menuanchor="slide07"><a href="#slide07">My BMI</a></li>
                                    <li data-menuanchor="slide08"><a href="#slide08">Others</a></li>
                                    <li data-menuanchor=""><a href="login.php">Log-Out</a></li>
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
                         if( $_SESSION['mtype'] == "family"){

                        ?>  
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/package.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>My Pakcage</h4>
                                                <h3 style="color:gray">Family Package</h3>
                                                 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/dependents.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Dependents</h4>
                                                <?php
                                                    include('includes/conn.php');
                                                     $sql = "SELECT count(mid) AS total FROM tbl_depben WHERE mid='".$_SESSION['mid']."'";
                                                    $result = mysqli_query($connect, $sql);
                                                    $values = mysqli_fetch_assoc($result);
                                                    $num_rows1 = $values['total'];

                                                ?>
                                                <p> you have : <h3 style="color:gray"><?php echo $num_rows1; ?></h3></p>
                                              
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/ba.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Benefits and Awards</h4>
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/farmers.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Farmers Care-Support</h4>
                                                <?php
                                                    include('includes/conn.php');
                                                    $sql = "SELECT * FROM tbl_registration WHERE mid = '".$_SESSION['localfarmer']."'";

                                                     $result = mysqli_query($connect, $sql);

                                                        if (mysqli_num_rows($result) > 0) {

                                                        while($row = mysqli_fetch_assoc($result)) {
                                                        $mname2 = $row['mname'];

                                                        }
                                                    ?>
                                                    <br>
                                                    <p>Your LOCAL FARMER: <h3 style="color:gray"><strong><?php echo $mname2; ?></strong></h3></p>
                                                
                                               <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/tips.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Food Nutrition Tips</h4>
                                             
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/myinfo.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>My Information</h4>
                                               
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    </div>
                                </div>
                            <?php
                            } else {
                            ?>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/package.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>My Pakcage</h4>
                                                <h3 style="color:gray">Livelihood Package</h3>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/ba.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Benefits and Awards</h4>
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/tips.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Food Nutrition Tips</h4>
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/myinfo.png" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>My Information</h4>
                                                
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                        <br>

                        <div  data-animate="fadeInUp">
                                        
                                        
                        </div>
                        
                        <div class="scroll-down next-section animate data-animate="fadeInUp""><img src="images/mouse-scroll.png" alt=""><span>
                        Scroll Down</span></div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide02">
                <div class="section-inner">
                    <div class="about-section">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 wide-col-laptop">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-contentbox">
                                            <div class="animate" data-animate="fadeInUp">
                                                <span>Your E-C Life Products</span>
                                            <?php
                                            if ($_SESSION['mtype'] == "family"){ 
                                                ?>
                                                <h2><?php echo $_SESSION['mtype']; ?> Pakcage</h2>
                                                <p>sharable<strong> BENEFITS</strong> to<strong> all Family Member. </strong> You have <strong> Power </strong> to decide<p>

                                             <?php }else{ 
                                                ?>
                                                <h2>Livelihood Pakcage</h2>
                                                     
                                             <?php }
                                             ?>


                                             <strong>Package Summary:</strong>
                                                   
                                                <?php 
                                                include('includes/conn.php');
                                                 $sql2 = "SELECT * FROM tbl_package WHERE mid='".$_SESSION['mid']."'";
                                                $result2 = mysqli_query($connect, $sql2);
                                                if (mysqli_num_rows($result2) > 0){

                                                    while($row2 = mysqli_fetch_assoc($result2)) {
                    
                                                            $tamount2=$row2['tamount'];
                                                            $ypay2=$row2['ypay'];
                                                            $termspay2=$row2['termspay']; 
                                                            $tpay2=$row2['tpay'];

                                                
                                                            if(($tamount2 == "" || $tamount2) <=0){
                                                            ?>
                                                                
                                                                <p>You dont set your package yet. Please click the button below to manage it.</p>

                                                             <button class="btn" type="submit" onclick="location.href='manacc.php'">manage your package</button>
                                                            <?php }else{ ?><br>
                                                                Total Amount Package:
                                                                <strong><?php echo "Php "; echo number_format((float)$tamount2, 2, '.', ','); ?></strong><br>
                                                                Total Years:
                                                                <strong><?php echo $ypay2; ?></strong><br>
                                                                Payment Terms:
                                                                <strong><?php echo $termspay2; ?></strong><br>
                                                                Amount/Terms:
                                                                <strong><?php echo "Php "; echo number_format((float)$tpay2, 2, '.', ','); ?></strong>
                                                            <?php }
                                                            ?>


                                                <?php }

                                                }else{ 
                                                ?> 
                                                        <?php
                                                        if( $_SESSION['uchoose'] == 1 and $_SESSION['mtype'] == "farmer"){
                                                        ?>
                                                            <p>Please wait for the Family to choose you.</p>
                                                        <?php
                                                        } else{ ?>
                                                        <p>You dont set your package yet. Please click the button below to manage it.</p>

                                                        <button class="btn" type="submit" onclick="location.href='manacc.php'">manage your package</button>
                                                        <?php
                                                        }
                                                        ?>

                                                       
                                                <?php }
                                                ?>
                                                   
                                         

                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide03">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <h2>My Dependents</h2>
                            </div>
                            <div class="services-section">
                                <div class="services-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                    <?php
                                        if( $_SESSION['uchoose'] == 1 and $_SESSION['mtype'] == "farmer"){
                                        ?>
                                        <p>Please wait for the Family to choose you.</p> 
  
                                        <?php }else{
                                         ?>   
                                         

                                            <?php
                                                include('includes/conn.php');
                                                 $sql = "SELECT * FROM tbl_depben WHERE mid='".$_SESSION['mid']."'";

                                                $result = mysqli_query($connect, $sql);

                                                    if (mysqli_num_rows($result) > 0) {

                                                        while($row = mysqli_fetch_assoc($result)) {
                                                        $deprel2 = $row['deprel'];
                                                        $depname2 = $row['depname'];
                                                        $perben2= $row['perben'];

                                                        ?>
                                                         <div class="service-box">
                                                            <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                                                            <h3><?php echo $depname2; ?></h3>
                                                            <p>Releationsip: <strong><?php echo $deprel2; ?></strong> </p>
                                                            <p>Percentage Benegits: <strong><?php echo $perben2; ?>%</strong> </p>

                                                        </div>
                                                    <?php
                                                        }
                                                    }
                                                    mysqli_close($connect);  
                                             ?>       

                                        <div class="service-box">
                                            <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                                            <h3>Livelihood Insurance</h3>
                                            <p>local farmers partner will get 50% OFF </p>
                                        </div>
                                    </div>
                                    
                                  
                                </div>
                            </div>
                                <br>
                              <button class="btn" type="submit" onclick="location.href='newdep.php'">add</button>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide04">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-7 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Benefits and Awards</span>
                                
                            </div>
                            <div class="skills-row animate" data-animate="fadeInDown">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">   
                                    <?php
                                         if( $_SESSION['uchoose'] == 1 && $_SESSION['mtype'] == "farmer"){
                                        ?>
                                            <p>Please wait for the Family to choose you.</p>

                                    <?php }else{
                                     ?>
                                        <div class="skill-item">
                                            <h6>Medical Expenses</h6>
                                            <div class="skill-bar">
                                                <span>50%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>Education</h6>
                                            <div class="skill-bar">
                                                <span>60%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item">
                                            <h6>Medicine</h6>
                                            <div class="skill-bar">
                                                <span>50%</span>
                                                <div class="filled-bar"></div>
                                            </div>          
                                        </div>
                                        <div class="skill-item last-skill">
                                            <h6>Groceries</h6>
                                            <div class="skill-bar">
                                                <span>50%</span>
                                                <div class="filled-bar-2"></div>
                                            </div>          
                                        </div>

                                          <button class="btn" type="submit" onclick="location.href='setper.php'">Set your Percentage</button>

                                      <?php } ?>                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section animated-row" data-section="slide05">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Support LOCAL FARMERS</span><br>
                                <?php if($_SESSION['localfarmer'] == ""){ 
                                    ?>
                                    <p>Please click the button below to CHOOSE your LOCAL FARMER.</p>
                                    <form method="get" action="setfarm.php">
                                    <select name="mid2" id="mid2" class="form-control" style="color: black">
                                    <?php
                                        include('includes/conn.php');
                                         $sql = "SELECT * FROM tbl_registration WHERE mtype='farmer' and uchoose='1'";

                                        $result = mysqli_query($connect, $sql);

                                        if (mysqli_num_rows($result) > 0) {

                                             while($row = mysqli_fetch_assoc($result)) {
                                             $mid2 = $row['mid'];
                                             $mname = $row['mname'];
                                    ?>              
                                             <option id = "mid2" name= "mid2" value="<?php echo $mid2; ?>"><?php echo $mname; ?></option>

                                    <?php
                                            }

                                        }
                                       
                                       
                                    ?>
                                     </select>
                                     
                                     <button class="btn" type="submit" onclick="location.href='setfarm.php'">SAVE</button>
                                 </form>

                                <?php }else{ 
                                    include('includes/conn.php');
                                         $sql = "SELECT * FROM tbl_registration WHERE mid = '".$_SESSION['localfarmer']."'";

                                        $result = mysqli_query($connect, $sql);

                                        if (mysqli_num_rows($result) > 0) {

                                             while($row = mysqli_fetch_assoc($result)) {
                                             $mname2 = $row['mname'];

                                         }
                                            ?>
                                                    <br>
                                                    <p>Your LOCAL FARMER: <h3><strong><?php echo $mname2; ?></strong></h3></p>
                                                    <div class="input-field">
                                                    Send Message:
                                            
                                                        <textarea class="form-control" name="message" id="message" required></textarea>
                                                    </div>
                                                    <button class="btn">SEND</button>
                                <?php  
                                    
                                        }

                                } 
                                mysqli_close($connect);
                                    ?>


                                 
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
               



                <div class="section animated-row" data-section="slide06">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Food Nutrition Tips</span>
                                
                            </div>
                            <div class="gallery-section">
                                <div class="gallery-list owl-carousel">
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/vegetables.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Vegestable</h4>
                                                <button class="btn" style="background-color: lightgray" onclick="location.href='tips.php'">read here</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/fruits.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Fruits</h4>
                                                <button class="btn" style="background-color: lightgray" onclick="location.href='tips.php'">read here</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/rootcrops.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Root Crops</h4>
                                                <button class="btn" style="background-color: lightgray" onclick="location.href='tips.php'">read here</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/greenleaf.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Green Leaf</h4>
                                                <button class="btn" style="background-color: lightgray" onclick="location.href='tips.php'">read here</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item animate" data-animate="fadeInUp">
                                        <div class="portfolio-item">
                                            <div class="thumb">
                                                <img src="images/rice.jpg" alt="">
                                            </div>
                                            <div class="thumb-inner animate" data-animate="fadeInUp">
                                                <h4>Rice</h4>
                                                <button class="btn" style="background-color: lightgray" onclick="location.href='tips.php'">read here</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                  <div class="section animated-row" data-section="slide07">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <span>Calculate MY BMI</span>
                                
                            </div>
                            <div class="row">
                        <div class="col-md-3 animate" data-animate="fadeInUp">
                                               
                        </div>
                         <div class="col-md-6 animate" data-animate="fadeInUp">
                                       <form method="get" action="bmi.php">
                                        
                                            <div class="input-field">
                                                Mass in Kilogram (kg):
                                                <input type="text" class="form-control" name="mass" id="mass">
                                            </div>
                                            <div class="input-field">
                                               Height in meter (m):
                                                <input type="text" class="form-control" name="height" id="height" required >
                                            </div>

                                            <button class="btn" type="submit" formaction="bmi.php">calculate</button>
                                        </form>
                                        
                        </div>
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