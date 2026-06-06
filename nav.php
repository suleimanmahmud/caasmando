<?php
// include 'autoloader.php';
$set = new login();
$home="";
$about="";
$service="";
$contact="";
$books="";
$library="";
$login="";
$profile="";
if(isset($_GET['home'])){
    $home="active";
}else if(isset($_GET['about'])){
    $about="active";
}else if(isset($_GET['service'])){
    $service="active";
}else if(isset($_GET['contact'])){
    $contact="active";
}else if(isset($_GET['books'])){
    $books="active";
}else if(isset($_GET['library'])){
    $library="active";
}else if(isset($_GET['profile'])){
    $profile="active";
}else if(isset($_GET['login'])){
    $set->unsetlogin(); 
    $login="active";
}else{
    $home="active";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CAAS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="CAAS" name="keywords">
        <meta content="CAAS" name="description">

        <!-- Favicon -->
        <link href="img/abulogo2.jpeg" rel="icon">

        <!-- Google Font -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">  -->

        <!-- Libraries CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav" style="background:linear-gradient(90deg,#0f7b5c,#1fa97a);">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="index.php" class="navbar-brand d-flex align-items-center" style="color:#fff; font-weight:600; font-size:18px;">
                <img src="img/abulogo2.jpeg" 
                     style="width:50px; height:50px; border-radius:50%; margin-right:10px;" 
                     alt="Logo">
               <div style="margin-left:50px">CAAS MANDO
                <span style="font-size:8px; display:block">COLLEGE OF AGRICULTURE AND ANIMAL SCIENCE</span>
                <span style="font-size:8px; display:block">MANDO KADUNA</span>
               </div> 
            </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav ml-auto">
                            <a href="index.php?home=1"  class="nav-item nav-link <?php echo $home ?>">Home</a>
                            <a href="about.php?about=1" class="nav-item nav-link <?php echo $about ?>">About</a>
                            <a href="service.php?service=1" class="nav-item nav-link <?php echo $service ?>">Programs</a>
                            <!-- <a href="books.php?books=1" class="nav-item nav-link <?php echo $books ?>">Books</a> -->
                            <!-- <a href="portfolio.html" class="nav-item nav-link">Portfolio</a> -->
                            <!-- <a href="pricing.html" class="nav-item nav-link">Pricing</a> -->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Skills</a>
                                    <a href="#" class="dropdown-item">Team Members</a>
                                    <a href="#" class="dropdown-item">Reviews</a>
                                    <a href="#" class="dropdown-item">Clients</a>
                                    <a href="#" class="dropdown-item">Single Page</a>
                                </div>
                            </div> -->
                            <a href="contact.php?contact=1" class="nav-item nav-link <?php echo $contact; ?>">Contact</a>                        
                        </div>
                    </div>
                </nav>
            </div>
        </div>
</body>
</html>