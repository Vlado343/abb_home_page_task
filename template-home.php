
 <?php get_header();

      /**
*Template Name: Home Template
 */
?>
      
      <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid">
       <div class="container single_about">
      <?php 
              $args=array(
                'post_type' => 'sliders',
                'post_per_page' => 1
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
    
             ?>
         <h4></h4>
          <h1 class="jumbo-title teaser"><?php the_title();?></h1>
          <p class="jumbo-subtitle"><?php the_field('slider_subtitle'); ?></p>
         <?php    
            }
            wp_reset_postdata();
            ?>
       </div>
      </div>

      <!-- -Subsection -->
      <section>
      <div class="container pt-5 pb-5">
            <?php 
              $args=array(
                'post_type' => 'subsection',
                'post_per_page' => 1
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
      <div class="row copyright">
         <div class="">
            <p class="text-left p-3"><?php the_field('subsection_text'); ?></p>
         </div>
      </div>
            <?php    
            }
            wp_reset_postdata();
            ?>
      </div>
     </section>

      <!-- Teaser -->
      <section class="about-area  pb-5" id="about">
         <div class="container-fluid bg-light ">
           <div class="container">
            <div class="row copyright pb-4 pt-4">
            <?php 
              $args=array(
                'post_type' => 'guide',
                'post_per_page' => 1
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
            <div class="col-md-4 produkt-align">
                  <div class="single_about">
                     <h4 class=""></h4>
                     <h3 class="teaser pb-2"><?php the_title();?></h3>
                     <img src="<?php the_post_thumbnail_url(); ?>" class="h-100" alt="" />
                  </div>
               </div>
             <div class="col-md-8">
                <div class="about ">
                 <p class="text-left pb-3 pt-3"><?php the_field('guide_text') ?></p>
                <div>
                 <a href="<?php the_field('guide_button_url');?>" class="btn btn-danger "><?php the_field('guide_button_text') ?> </a>
               </div>
                </div>
            </div>
               <?php    
               }
               wp_reset_postdata();
               ?>
             </div>
             </div>
            </div>
         </section>

      <!-- Cards -->
         <section>
               <div class="container pt-2 pb-5">
                <div class="row">
                 <div class="col-sm-12 single_about ">
                   <h4 class=""></h4>
                  <h3 class="teaser">Zwischenüberschrift Applicationberichter /Fachartikel</h3>
                </div>
              </div>
            <div class="row">
            <?php 
              $args=array(
                'post_type' => 'cards',
                'post_per_page' => 3
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>

            <div class="col-md-4">
             <div class="card">
               <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?> ?>/assets/img/abb-card1.jpg" alt="Card image cap">
               <div class="pt-3">
                  <h4 class="card-title"><?php the_title();?></h4>
                  <p class="card-text"><?php the_content();?> </p>
               </div>
               <div class="mt-3 mb-3">
                 <a href="<?php the_field('button_url');?>" class="btn btn-danger "><?php the_field('button_text');?></a>
               </div>
             </div>
            </div>
            <?php    
            }
            wp_reset_postdata();
            ?>
            </div>
               </div>
            </section>
            <!-- Produkte sectons -->

           <section>
             <div class="container">
              <div class="row pb-5 pt-5 ">
              <?php 
              $args=array(
                'post_type' => 'product1',
                'post_per_page' => 1
              );
              
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
              <div class="col-md-4 ">
                     <img src="<?php the_field('image_product_one'); ?>" class="h-100 w-100" alt="" />
              </div>
               <div class="col-md-8">
                  <div class="single_about produkt-align">
                  <h4 class=""></h4>
                     <h3 class="teaser"><?php the_title();?></h3>
                     <p class="text-left mt-3 mb-3"><?php the_content();?></p>
                  <div class="mt-3">
                    <a href="<?php the_field('product_one_button_url'); ?>" class="btn btn-danger "><?php the_field('product_one_btn_text'); ?> </a>
                  </div>
               </div>
               </div>
               <?php    
            }
            wp_reset_postdata();
            ?>
            </div>
            <div class="row pb-5 pt-5">
            <?php 
              $args=array(
                'post_type' => 'product2',
                'post_per_page' => 1
              );
             
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
               <div class="col-md-8">
                  <div class="single_about produkt-align">
                  <h4 class=""></h4>
                     <h3 class="teaser"><?php the_title();?></h3>
                     <p class="text-left mt-3 mb-3"><?php the_content();?></p>
                  <div class="mt-3">
                     <a href="<?php the_field('product_two_button_url'); ?>" class="btn btn-danger "><?php the_field('product_two_btn_text'); ?></a>
                  </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                     <img src="<?php the_field('image_product_two'); ?>" class="h-100 w-100" alt="" />
               </div>
               <?php    
                }
                wp_reset_postdata();
                ?>
             </div>
            <div class="row pb-5 pt-5">
            <?php 
              $args=array(
                'post_type' => 'product3',
                'post_per_page' => 1
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
            <div class="col-md-4 ">
                  <img src="<?php the_field('image_product_three'); ?>" class="h-100 w-100" alt="" />
               </div>
               <div class="col-md-8">
                  <div class="single_about produkt-align">
                    <h4 class=""></h4>
                    <h3 class="teaser"><?php the_title();?></h3>
                    <p class="text-left mt-3 mb-3"><?php the_content();?></p>
                  <div class="mt-3">
                    <a href="<?php the_field('product_three_button_url'); ?>" class="btn btn-danger "><?php the_field('product_three_btn_text'); ?></a>
                   </div>
                  </div>
               </div>
               <?php    
               }
               wp_reset_postdata();
               ?>
            </div>

            <div class="row pb-5 pt-5">
            <?php 
              $args=array(
                'post_type' => 'product4',
                'post_per_page' => 1
              );
             
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>
               <div class="col-md-8">
                  <div class="single_about produkt-align">
                      <h4 class=""></h4>
                      <h3 class="teaser"><?php the_title();?></h3>
                      <p class="text-left mt-3 mb-3"><?php the_content();?></p>
                   <div class="mt-3">
                      <a href="<?php the_field('product_four_button_url'); ?>" class="btn btn-danger "><?php the_field('product_Four_btn_text'); ?> </a>
                   </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                     <img src="<?php the_field('image_product_four'); ?>" class="h-100 w-100" alt="" />
               </div>
            <?php
               }
               wp_reset_postdata();
               ?>
             </div>
            </div>
         </div>
      </section>


      
      <?php get_footer(); ?>
 