<header id="header" class="header">
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord default no-bg"><a
                            class="menuzord-brand pull-left flip mb-15" href="index-mp-layout1.html"><img
                                src="images/logo-wide.png" alt=""></a>
                    <ul class="list-inline nav-side-icon-list pull-right">
                        <li>
                            <a href="#" id="inline-fullwidth-search-btn"><i
                                        class="search-icon fa fa-search"></i></a>
                            <div id="inline-fullwidth-search-form" class="clearfix">
                                <form method="GET">
                                    <input type="text" name="s" value="" placeholder="Type and Press Enter..."
                                           autocomplete="off">
                                </form>
                                <a href="#" id="close-search-btn"><i class="icon_close"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="woocommerce top-nav-mini-cart-icon-container">
                                <div class="top-nav-mini-cart-icon-contents">
                                    <a class="mini-cart-icon" href="#" title="View your shopping cart"><i
                                                class="icon_cart_alt"></i><span class="items-count">2</span> <span
                                                class="cart-quick-info">2 items - <span
                                                    class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">&pound;</span>38.00</span></span></a>
                                    <div class="dropdown-content">
                                        <div class="dropdown-content-wrapper">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="Remove this item"
                                                       data-product_id="3265" data-product_sku="">×</a>
                                                    <a href="#"><img src="http://placehold.it/68x68" alt=""
                                                                     width="68">Happy Ninja&nbsp;</a>
                                                    <span class="quantity">1 × <span
                                                                class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">£</span>18.00</span></span>
                                                </li>
                                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a href="#" class="remove" aria-label="Remove this item"
                                                       data-product_id="31" data-product_sku="">×</a>
                                                    <a href="#"><img src="http://placehold.it/68x68" alt=""
                                                                     width="68">Ninja Silhouette&nbsp;</a>
                                                    <span class="quantity">1 × <span
                                                                class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">£</span>20.00</span></span>
                                                </li>
                                            </ul>
                                            <div class="woocommerce-mini-cart__total total cart-subtotal">Subtotal:
                                                <span><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">£</span>38.00</span></span>
                                            </div>
                                            <div class="woocommerce-mini-cart__buttons buttons cart-action-buttons">
                                                <div class="row">
                                                    <div class="col-xs-6 pr-5"><a
                                                                href="http://kodesolution.net/demo/wp/medicale-wp/cart/"
                                                                class="btn btn-gray btn-block wc-forward">View
                                                            Cart</a></div>
                                                    <div class="col-xs-6 pl-5"><a
                                                                href="http://kodesolution.net/demo/wp/medicale-wp/checkout/"
                                                                class="btn btn-dark btn-theme-colored btn-block checkout wc-forward">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"><i
                                            class="fa fa-bars font-24"></i></a></div>
                        </li>
                    </ul>
                    <ul class="menuzord-menu">
                        <?php
                        if (isset($_SESSION['is_login'])) {
                            ?>
                            <li>
                                <a href="#">Mon profil</a>
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
