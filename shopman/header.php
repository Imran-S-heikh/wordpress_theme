<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="row full-width no-gutters">
            <div class="site_logo col-12 col-lg-3 d-flex bg-black">
                <img class="mr-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="">
            </div>
            <div class="navigation_container col-12 col-lg-9">
                <div class="nav_top d-flex justify-content-between align-items-center">
                    <div class="number"><span class="material-icons">call</span> 01881576959</div>
                    <div class="text_content">
                        <ul class="d-flex">
                            <li>English &#9660;</li>
                            <li>USD &#9660;</li>
                            <li>Wishlist(0)</li>
                            <li>Login/Register</li>
                        </ul>
                    </div>
                </div>
                <nav class="main_nav">
                  <?php wp_nav_menu(array(
                    'menu_class'      => 'nav_items',
                    'menu_id'         => 'header_main_menu',
                    'theme_location'  => 'primary_menu'
                  )); ?>

                  <script type="text/javascript">
                    document.querySelector('#header_main_menu')
                    .firstChild.insertAdjacentHTML('beforeend',`
                    <div class="search_container">
                        <span class="material-icons">search</span>
                        <span class="material-icons">shopping_cart</span>
                    </div>`)
                  </script>
                    <!-- <div class="nav_items">
                        <ul class="d-flex justify-content-between">
                            <li class="nav_item"><a href="#">HOME</a></li>
                            <li class="nav_item"><a href="#">BLOG</a></li>
                            <li class="nav_item"><a href="#">SHOP</a></li>
                            <li class="nav_item"><a href="#">CHECK OUT</a></li>
                            <li class="nav_item"><a href="#">CART</a></li>
                            <li class="nav_item"><a href="#">MY ACCOUNT</a></li>
                            <div class="search_container">
                                <span class="material-icons">search</span>
                                <span class="material-icons">shopping_cart</span>
                            </div>
                        </ul>
                    </div> -->
                    <div class="search_container--lg d-flex align-items-center mr-auto">
                        <div class="search d-flex">
                            <input type="search" placeholder="Search...">
                            <button class="btn bg-black"><span class="material-icons color-white">search</span></button>
                        </div>
                        <span class="site-header-cart menu">
                          <span class="cart-contents material-icons cart">shopping_cart</span>

                        </span>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php do_action('header_end'); ?>
