<?php /* Template Name: People 10/15/16 Template*/ get_header(); ?>
<link href='wp-content/themes/nyu-wireless/css/subpage-style.css' rel='stylesheet' type='text/css'>
<link href='wp-content/themes/nyu-wireless/css/grid-style.css' rel='stylesheet' type='text/css'>
<div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
      <h1>Faculty</h1>
      <hr/>
      <a class="green-button-hover" href="javascript:;" id="open-all">Expand Profiles</a>
      <a class="green-button-hover" href="javascript:;" id="close-all">Close All Profiles</a>
      <div style="margin-top:15px;" class="grid">
         <div class="grid-sizer"></div>
         <?php if ( have_rows('faculty_profile') ):
            while ( have_rows('faculty_profile') ): the_row();  ?>
         <div class="grid-item">
            <div class="grid-item-content background-profile" style="background-image: url(<?php echo the_sub_field('faculty_headshot'); ?>)">
               <span class="title-class"><?php echo the_sub_field('faculty_name'); ?></span>
               <span class="hidden-expanded-content"><span class="expanded-name"><?php echo the_sub_field('faculty_name'); ?></span><br/>
               <span class="expanded-title"><?php echo the_sub_field('faculty_title'); ?></span><br/>
               <span class="expanded-research"><p>Research Interests: <?php echo the_sub_field('faculty_research'); ?></p></span><br/>
               <?php 
                  if( get_sub_field('project_link') ) { 
                     echo '<a class="green-button-hover" target="_blank" href="'; 
                     echo the_sub_field('project_link'); 
                     echo '">View Full Profile</a>';
                  } 
                  else{
                  
                  }?>  
               <?php 
                  if( get_sub_field('email_link') ) { 
                     echo '<a class="green-button-hover" href="mailto:'; 
                     echo the_sub_field('email_link'); 
                     echo '">Email</a>';
                  } 
                  else{
                  
                  }?>   
               <?php 
                  if( get_sub_field('phone_link') ) { 
                     echo '<p style="padding:10px 10px 10px 0;">Phone: ';
                     echo the_sub_field('phone_link'); 
                     echo '</p>';
                  } 
                  else{
                  
                  }?>  
               <a class="close-button" href="javascript:;"><img src="http://wireless.engineering.nyu.edu/images/close.png" alt="x"/></a></span>
            </div>
         </div>
         <?php endwhile;
            endif;?>
         <div class="grid-item grid-header">
            <div class="grid-item-content grid-header-content">
               <br/>
               <h1>Students</h1>
               <hr/>
            </div>
         </div>
         <?php if ( have_rows('student_profile') ):
            while ( have_rows('student_profile') ): the_row();  ?>
         <div class="grid-item">
            <div class="grid-item-content background-profile" style="background-image: url(<?php echo the_sub_field('student_headshot'); ?>)">
               <span class="title-class"><?php echo the_sub_field('student_name'); ?></span>
               <span class="hidden-expanded-content"><span class="expanded-name"><?php echo the_sub_field('student_name'); ?></span><br/>
               <span class="expanded-title"><?php echo the_sub_field('student_title'); ?></span><br/>
               <span class="expanded-research"><p>Research Interests: <?php echo the_sub_field('student_research'); ?></p></span><br/>
               <?php 
                  if( get_sub_field('project_link') ) { 
                     echo '<a class="green-button-hover" target="_blank" href="'; 
                     echo the_sub_field('project_link'); 
                     echo '/">View Profile</a>';
                  } 
                  else{
                  
                  }?>  
               <?php 
                  if( get_sub_field('email_link') ) { 
                     echo '<a class="green-button-hover" href="mailto:'; 
                     echo the_sub_field('email_link'); 
                     echo '">Email</a>';
                  } 
                  else{
                  
                  }?>  
            <?php 
                  if( get_sub_field('phone_link') ) { 
                     echo '<p style="padding:10px 10px 10px 0;">Phone: ';
                     echo the_sub_field('phone_link'); 
                     echo '</p>';
                  } 
                  else{
                  
                  }?>  
               <a class="close-button" href="javascript:;"><img src="http://wireless.engineering.nyu.edu/images/close.png" alt="x"/></a></span>  
            </div>
         </div>
         <?php endwhile;
            endif;?>
         <div class="grid-item grid-header">
            <div class="grid-item-content grid-header-content">
               <br/>
               <h1>Former Students</h1>
               <hr/>
            </div>
         </div>
         <?php if ( have_rows('former_student_profile') ):
            while ( have_rows('former_student_profile') ): the_row();  ?>
         <div class="grid-item">
            <div class="grid-item-content background-profile" style="background-image: url(<?php echo the_sub_field('former_student_headshot'); ?>)">
               <span class="title-class"><?php echo the_sub_field('former_student_name'); ?></span>
               <span class="hidden-expanded-content">
                  <span class="expanded-name"><?php echo the_sub_field('former_student_name'); ?></span><br/>
               <span class="expanded-title"><?php echo the_sub_field('former_student_title'); ?></span><br/>
               <span class="expanded-research"><p>Research Interests: <?php echo the_sub_field('former_student_research'); ?></p></span><br/>
               <?php 
                  if( get_sub_field('project_link') ) { 
                     echo '<a class="green-button-hover" target="_blank" href="'; 
                     echo the_sub_field('project_link'); 
                     echo '/">View Profile</a>';
                  } 
                  else{
                  
                  }?>  
               <?php 
                  if( get_sub_field('email_link') ) { 
                     echo '<a class="green-button-hover" href="mailto:'; 
                     echo the_sub_field('email_link'); 
                     echo '">Email</a>';
                  } 
                  else{
                  
                  }?>  
           <?php 
                  if( get_sub_field('phone_link') ) { 
                     echo '<p style="padding:10px 10px 10px 0;">Phone: ';
                     echo the_sub_field('phone_link'); 
                     echo '</p>';
                  } 
                  else{
                  
                  }?> 
                  <a class="close-button" href="javascript:;"><img src="http://wireless.engineering.nyu.edu/images/close.png" alt="x"/></a></span>  
            </div>
         </div>
         <?php endwhile;
            endif;?>
         <div class="grid-item grid-header">
            <div class="grid-item-content grid-header-content">
               <br/>
               <h1>Staff</h1>
               <hr/>
            </div>
         </div>
         <?php if ( have_rows('staff_profile') ):
            while ( have_rows('staff_profile') ): the_row();  ?>
         <div class="grid-item">
            <div class="grid-item-content background-profile" style="background-image: url(<?php echo the_sub_field('staff_headshot'); ?>)">
               <span class="title-class"><?php echo the_sub_field('staff_name'); ?></span>
               <span class="hidden-expanded-content"><span class="expanded-name"><?php echo the_sub_field('staff_name'); ?></span><br/>
               <span class="expanded-title"><?php echo the_sub_field('staff_title'); ?></span><br/>
               <span class="expanded-research"><p><?php echo the_sub_field('staff_research'); ?></p></span><br/>
               <?php 
                  if( get_sub_field('project_link') ) { 
                     echo '<a class="green-button-hover" target="_blank" href="'; 
                     echo the_sub_field('project_link'); 
                     echo '/">View Profile</a>';
                  } 
                  else{
                  
                  }?>  
               <?php 
                  if( get_sub_field('email_link') ) { 
                     echo '<a class="green-button-hover" href="mailto:'; 
                     echo the_sub_field('email_link'); 
                     echo '">Email</a>';
                  } 
                  else{
                  
                  }?>  
               <?php 
                  if( get_sub_field('phone_link') ) { 
                     echo '<p style="padding:10px 10px 10px 0;">Phone: ';
                     echo the_sub_field('phone_link'); 
                     echo '</p>';
                  } 
                  else{
                  
                  }?>  
               <a class="close-button" href="javascript:;"><img src="http://wireless.engineering.nyu.edu/images/close.png" alt="x"/></a></span>  
            </div>
         </div>
         <?php endwhile;
            endif;?>
      </div>
      <br/>
      <br/>
   </main>
   <!-- #main -->
</div>
<!-- #primary -->
<script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
<script>var grid = document.querySelector('.grid');
   var msnry = new Masonry( grid, {
percentPosition: true,
columnWidth: '.grid-sizer',
itemSelector: '.grid-item',
     gutter:10
   });
   
   grid.addEventListener( 'click', function( event ) {
     // don't proceed if item content was not clicked on
     if ( !matchesSelector( event.target, '.grid-item-content' )  ) {
       return;
     }
     var itemElem = event.target.parentNode;
     itemElem.classList.toggle('is-expanded');
   
     msnry.layout();
   });
</script>
<script>
//Allows jquery to run in wordpress
   jQuery(document).ready(function( $ ) {
      $('.close-button').click(function() {
      // $(this).parent('.grid-item').toggleClass('yourClass');

         // $(this).parent().removeClass('is-expanded');

            // $('.close-button').parent().eq(2).toggleClass( "is-expanded" );
            $( this ).parents('.grid-item').toggleClass( "is-expanded" );
         msnry.layout();
      });


      $('#open-all').click(function() {
         //removes is expanded class, then toggles it, the runs msnry grid layout restructure
         $( ".grid-item" ).removeClass( "is-expanded" );
               $( ".grid-item" ).toggleClass( "is-expanded" );
                    msnry.layout();
      });      
      $('#close-all').click(function() {
         //adds is expanded class, then toggles it, the runs msnry grid layout restructure
         $( ".grid-item" ).addClass( "is-expanded" );
               $( ".grid-item" ).toggleClass( "is-expanded" );
                    msnry.layout();
      });

   });  
</script>
<?php
get_sidebar();
get_footer();
?>