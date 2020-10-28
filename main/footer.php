<?php ?>
<footer id="footer" class="footer bg-black-111">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <img class="mt-10 mb-20 about-thumb" alt="" src="images/logo-hdi.png" width="120">
                    <p class="widget-title">Sicap Liberté 4 Dakar Sénégal</p>
                    <ul class="mt-5">
                        <li class="m-0 pl-0 pr-10"><i class="fa fa-phone text-theme-colored mr-5"></i> <a
                                    class="widget-title" href="#">(+221) 33 824 64 34</a></li>
                        <li class="m-0 pl-0 pr-10"><i class="fa fa-whatsapp text-theme-colored mr-5"></i> <a
                                    class="widget-title" href="#">(+221) 77 209 03 13</a></li>
                        <li class="m-0 pl-0 pr-10"><i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                    class="widget-title" href="#">hdinternationale@hdi-senegal.com</a></li>
                        <li class="m-0 pl-0 pr-10"><i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                    class="widget-title" href="#">www.hdi-senegal.com</a></li>
                    </ul>
                </div>
                <div class="widget dark">
                    <h4 class="widget-title">Connect With Us</h4>
                    <ul class="styled-icons icon-dark mt-20">
                        <li class="wow fadeInLeft"
                            data-wow-duration="1.5s"
                            data-wow-delay=".1s"
                            data-wow-offset="10">
                            <a href="https://web.facebook.com/HAUTEDEFINITIONINTERNATIONALE"
                               data-bg-color="#3B5998">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="wow fadeInLeft"
                            data-wow-duration="1.5s"
                            data-wow-delay=".1s"
                            data-wow-offset="10">
                            <a href="https://www.facebook.com/Haute-Definition-Dakar-S%C3%A9n%C3%A9gal-546846655388098/"
                               data-bg-color="#3B5998">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h4 class="widget-title">Formations</h4>
                    <ul class="list-border">
                        <li><a class="widget-title" href="#">Coaching Personnel</a></li>
                        <li><a class="widget-title" href="#">Coaching Politique</a></li>
                        <li><a class="widget-title" href="#">Coaching Professionnel</a></li>
                        <li><a class="widget-title" href="#">Coaching de groupe</a></li>
                        <li><a class="widget-title" href="#">Coaching d’entreprise</a></li>
                        <li><a class="widget-title" href="#">Relooking</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <ul class="list-border">
                        <li><a class="widget-title" href="#">Production audiovisuelle</a></li>
                        <li><a class="widget-title" href="#">Communication Interpersonnelle</a></li>
                        <li><a class="widget-title" href="#">Communication d'entreprise</a></li>
                        <li><a class="widget-title" href="#">Ressources Humaines</a></li>
                        <li><a class="widget-title" href="#">Management</a></li>
                        <li><a class="widget-title" href="#">Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <ul class="list-border">
                        <li><a class="widget-title" href="#">Bonne gouvernance Administrative</a></li>
                        <li><a class="widget-title" href="#">Dividende démographique</a></li>
                        <li><a class="widget-title" href="#">Informatique et Multimedia</a></li>
                        <li><a class="widget-title" href="#">Développement personnel et Professionnel</a></li>
                        <li><a class="widget-title" href="#">Coaching d’entreprise</a></li>
                        <li><a class="widget-title" href="#">Séances de Relaxation</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-222">
        <div class="container pt-10 pb-0">
            <div class="row">
                <div class="col-md-6 sm-text-center">
                    <p class="font-13 text-black-777 m-0">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
                </div>

                <div class="col-md-6 sm-text-center">
                    <?php if (!isset($_SESSION['is_admin_login'])) {
                        ?>
                            <a class="font-14 text-white-f7 m-0" href="#" data-toggle="modal" data-target=".bs-example-modal-lg-admin-login">Administration</a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="modal fade bs-example-modal-lg-admin-login" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <!--Sama formulaire-->
            <?php include 'pages_includes/form-admin-login.php' ?>
        </div>
    </div>
</div>
