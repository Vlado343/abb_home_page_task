

<!-- Footer Area End -->
<footer class="footer bg-secondary mt-5">
   <div class="container-fluid footer-container">
     <div class="container">
      <div class="row copyright">
            <?php 
            $args=array(
                'post_type' => 'footer',
                'post_per_page' => 1
              );
              $query= new WP_Query($args);
              while ($query -> have_posts()){
                $query -> the_post();
             ?>

         <div class="col-md-6 footer-impresum d-flex justify-content-between">
            <ul class="d-flex">
               <?php
               ?>
               <li><a href="<?php the_field('contact_url');?>"><?php the_field('contact_label');?></a></li>
               <li><a href="<?php the_field('facebook_url');?>"><?php the_field('impressum_label');?></a></li>
               <li><a href="<?php the_field('facebook_url');?>"><?php the_field('privacy_label');?></a></li>
            </ul>
            <ul class="d-flex social-icons">
            <li><a href="<?php the_field('facebook_url');?>"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="<?php the_field('twiter_url');?>"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="<?php the_field('linkedin_url');?>"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
         </div>
         <div class="col-md-6 text-center">
            <p>Copyright &copy; ABB AG</p>
         </div>
         <?php    
            }
            wp_reset_postdata();
            ?>
      </div>
      </div>
   </div>
</footer>
<!-- Footer Area End -->

<?php wp_footer(); ?>
</body>
</html>

