<?php
/**
Template name: home page v
*/

get_header(); ?>

			<div class="col-md-12"><!-- Main Content Area -->
				<?php if (have_posts()) : while (have_posts()) :
				      the_post();
				         the_content(); 
				         	endwhile; 
				         		endif; ?>

			</div>


<div class="col-md-3">
  <h1>hello world</h1>
</div>

adfadsfadsfasdfadsdfsa


<?php get_footer(); ?>
