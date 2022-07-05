 <!DOCTYPE html>
 <html lang="en">

 <head>
     <title>
         <?php bloginfo("name") ?>
         <?php wp_title(" | ", true, "left") ?>
     </title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Marko Todorovic">
     <meta name="description" content="Beauty Copywriter for Skin Care, Cosmetics, Beauty & Hair Care Products">
     <meta name="keywords" content="Mademoiselle,service,products,blog,hair care,skin,model,waxing,day and night makeup">


     <!-- ios Compatible -->
     <meta name="apple-mobile-web-app-capable" content="yes">
     <meta name="apple-mobile-web-app-title" content="<?php bloginfo("name") ?>">
     <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>./frontend/apple-icon-144x144.png">

     <!-- ANDROID Compatible -->
     <meta name="mobile-web-app-capable" content="yes">
     <meta name="application-name" content="<?php bloginfo("name") ?>">
     <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>./frontend/android-icon-192x192.png ">

     <!-- CSS FILES -->
     <?php wp_head(); ?>
 </head>

 <body <?php body_class() ?>>
     <header>
         <div class="container ">
             <nav class="navbar  navbar-expand-md navbar-light bg-white px-2 ">
                 <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                     <a class="navbar-brand" href="<?php echo home_url() ?>">
                         <img src="<?php echo get_template_directory_uri() ?>./frontend/img/Page_1/m_HOME/logo.png" alt="">
                     </a>
                 <?php
                    };
                    ?>
                 <button class="navbar-toggler border-0 " type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                     <span></span>
                     <span></span>
                     <span></span>
                 </button>
                 <div class="collapse navbar-collapse " id="main-menu">
                     <?php
                        $menuLocation = get_nav_menu_locations();
                        $mainMenuID = $menuLocation["main-menu"];
                        $topMenuItems = wp_get_nav_menu_items($mainMenuID);
                        if ($topMenuItems) {
                            ?>
                         <ul class="navbar-nav ml-auto list-unstyled text-center pt-2">
                             <?php
                                    foreach ($topMenuItems as $topMenuItem) {
                                        $active_class = "";
                                        if ($topMenuItem->url == get_permalink()) {
                                            $active_class = "active";
                                        }
                                        if ($topMenuItem->menu_item_parent == 0) {
                                            ?>
                                     <li class="nav-item">
                                         <a class="nav-link <?php echo $active_class ?>" href="<?php echo $topMenuItem->url ?>"><?php echo $topMenuItem->title ?></a>
                                     </li>
                         <?php
                                    }
                                }
                            }
                            ?>
                 </div>
             </nav>
         </div>
     </header>
     <!-- HEADER END -->