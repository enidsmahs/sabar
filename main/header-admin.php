<header id="header" class="header">
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default no-bg"><a
                            class="menuzord-brand pull-left flip mb-15" href="index-mp-layout1.html"><img
                                src="images/logo-wide.png" alt=""></a>
                    <ul class="menuzord-menu">
                        <?php
                        if (isset($_SESSION['is_admin_login'])) {
                            ?>
                            <li>
                                <a href="course.php">Course</a>
                            </li>
                            <li>
                                <a href="logout.php">Déconnexion</a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Registration</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg-login">Login</a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
