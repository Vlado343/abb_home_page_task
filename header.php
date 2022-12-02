<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->

      <?php wp_head(); ?>
   </head>
   <body>
	 
      <!-- Header Area Start -->
      <section>
      <header class="header header-fixed">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="/abb"><img src="<?php echo get_template_directory_uri() ?>/assets/img/abb-logo.png" height="100"  width="120"></a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse ml-auto mainmenu" id="navbarNav">
                        
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'navbar-nav ml-auto',
                            //'echo'              => true,
                            'walker' => new WPDocs_Walker_Nav_Menu(),
                    
                           //  'sort_column' => 'menu_order', 
                           // 'container_class' => 'menu-header',
                           // 'container' => 'div',
                            //'menu' => 'primary-menu'
                           // 'walker' => "",
                        ));?>
                       
                     </div>
                     
                  </nav>
                  
               </div>
            </div>
         </div>
      </header>
      </section>