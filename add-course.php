<?php
include_once 'connection/DataBase.php';
if (!isset($_SESSION)) {session_start();}

if ($_SESSION['is_admin_login']) {
    $email = $_SESSION['adresse_email'];
    $db = new DataBase();

    if (isset($_REQUEST['samaBtnSubmit'])) {
        $image_name = $_FILES['img_course']['name'];
        $image_tmp = $_FILES['img_course']['tmp_name'];
        $directory = 'img_course/' . $image_name;
        if ($_REQUEST['nomDuCours'] = "" || $_REQUEST['descriptionDuCours'] = "" || $_REQUEST['authorDuCours'] = "" || $_REQUEST['duration'] = "" || $_REQUEST['prixOriginal'] = "" || $_REQUEST['prix'] = ""):
            $message = '<div class="alert alert-warning mt-10">veuillez remplir tous les champs</div>';
        else:
            move_uploaded_file($image_tmp, $directory);
            $insert = $db->create("insert into course(name_course,description_course,auteur,img,duration,price,original_price) values(:name_course,:description_course,:author,:img,:duration,:price,:original_price)",
                [
                    ':name_course' => $_REQUEST['name_course'],
                    ':description_course' => $_REQUEST['description_course'],
                    ':author' => $_REQUEST['author_course'],
                    ':img' => $image_name,
                    ':duration' => $_REQUEST['duration_course'],
                    ':price' => $_REQUEST['price_course'],
                    ':original_price' => $_REQUEST['price_original_course']
                ]
            );
            if ($insert == true) {
                $message = '<div class="alert alert-success mt-10">cours enrégistré avec succes</div>';
            }
        endif;
    }

} else {
    echo "<script>location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description"
          content="Digital Marketing Agencies, SEO companies & Social Media specialists HTML5 Template"/>
    <meta name="keywords" content="marketing,seo,ppc,mapping,linkbuilding,analytics,ads"/>
    <meta name="author" content="ThemeMascot"/>

    <!-- Page Title -->
    <title>Sabar E-learning</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="icon">
    <link href="images/apple-touch-icon-72x72.png" rel="icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="css/menuzord-megamenu.css" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="has-side-panel side-panel-right fullwidth-page">
<div class="body-overlay"></div>
<div id="side-panel" class="dark layer-overlay overlay-white-8" data-bg-img="images/bg/bg1.jpg">
    <div class="side-panel-wrap">
        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon_close font-30"></i></a>
        </div>
        <div class="side-panel-widget">
            <div class="widget">
                <a href="javascript:void(0)"><img alt="logo" src="images/logo-wide.png"></a>
                <p class="mt-20">Lorem ipsum dolor sit amet, consect etur adipisi cing elit commodi molestiae autem
                    fugit consectetur dolor ullam illo ipsa numquam quod iusto enim ipsum amet iusto amet consec.</p>
            </div>
            <div class="widget">
                <h5 class="widget-title">Useful Links</h5>
                <nav>
                    <ul class="nav nav-list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a class="tree-toggler nav-header">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="nav nav-list tree">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="widget">
                <h5 class="widget-title">Opening Hours</h5>
                <div class="opening-hours text-left">
                    <ul class="list-unstyled">
                        <li class="clearfix line-height-1"><span> Monday - Friday </span>
                            <div class="value"> 9.00 - 20.00</div>
                        </li>
                        <li class="clearfix line-height-1"><span> Saturday </span>
                            <div class="value"> 10.00 - 16.00</div>
                        </li>
                        <li class="clearfix line-height-1"><span> Sunday </span>
                            <div class="value"> 9.30 - 18.00</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget">
                <h5 class="widget-title">Contact Info</h5>
                <ul>
                    <li class="font-14 mb-5"><i class="fa fa-phone text-theme-colored"></i> <a href="#"
                                                                                               class="text-gray">(+01) –
                            234 567 890</a></li>
                    <li class="font-14 mb-5"><i class="fa fa-globe text-theme-colored"></i> <a class="text-gray"
                                                                                               href="#">www.yourdomain.com</a>
                    </li>
                    <li class="font-14 mb-5"><i class="fa fa-envelope-o text-theme-colored"></i> <a href="#"
                                                                                                    class="text-gray">contact@yourdomain.com</a>
                    </li>
                </ul>
            </div>
            <div class="widget">
                <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <p>Copyright &copy;2016 ThemeMascot</p>
        </div>
    </div>
</div>
<div id="wrapper">
    <!-- Header -->
    <?php include 'main/header-admin.php' ?>

    <!-- Start main-content -->
    <div class="main-content">

        <!-- Section: Mission -->
        <section class="bg-lighter">
            <div class="container pb-70 pb-sm-60">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-center line-height-1 mt-0">AJOUTER UN<span class="text-theme-colored3"> COURS</span></h2>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="add-course.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name_course">Nom du cours</label>
                                        <input type="text" class="form-control" name="name_course" id="name_course" placeholder="Nom du cours">
                                    </div>
                                    <div class="form-group">
                                        <label for="description_course">Description du cours</label>
                                        <input type="text" class="form-control" name="description_course" id="description_course" placeholder="Description du cours">
                                    </div>
                                    <div class="form-group">
                                        <label for="author_course">Autheur du cours</label>
                                        <input type="text" class="form-control" name="author_course" id="author_course" placeholder="Autheur du cours">
                                    </div>
                                    <div class="form-group">
                                        <label for="duration_course">Duration</label>
                                        <input type="text" class="form-control" name="duration_course" id="duration_course" placeholder="Duration">
                                    </div>
                                    <div class="form-group">
                                        <label for="price_course">Prix</label>
                                        <input type="text" class="form-control" name="price_course" id="price_course" placeholder="Prix">
                                    </div>
                                    <div class="form-group">
                                        <label for="price_original_course">Prix Original</label>
                                        <input type="text" class="form-control" name="price_original_course" id="price_original_course" placeholder="Prix Original">
                                    </div>
                                    <div class="form-group">
                                        <label for="img_course">File input</label>
                                        <input type="file" id="img_course" name="img_course">
                                    </div>
                                    <button type="submit" name="samaBtnSubmit" id="samaBtnSubmit" class="btn btn-default">Submit</button>
                                    <?php
                                        if (isset($message)) {
                                            echo $message;
                                        }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- end main-content -->
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>
