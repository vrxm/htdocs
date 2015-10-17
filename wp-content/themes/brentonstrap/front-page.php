<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>



<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
          
			<?php while ( have_posts() ) : the_post(); ?>



			<?php endwhile; // End of the loop. ?>
        

          <!--Query the database and show 1 post from the featured category-->
          <?php $custom_query = new
          WP_Query('posts_per_page=1&category_name=featured');
          while($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <!--before you start showing me a post, wrap it in a div with a bootstrap class-->
            <div class="jumbotron featured" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!--get the thumbnail; you created this with 'featured image'-->
            <div class="crop-height"><?php the_post_thumbnail( 'full' ); ?></div>
            <!--get the post title, wrap it in an h3 tag and make it a hyper link to the actual post-->
            <div class="row">
              <h1 class="the-title-feat"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </div>
            
            <!--get the author's name-->
            <p class="author">by&nbsp;<?php the_author(); ?></p>
            <!--get the excerpt-->
            <?php the_excerpt(); ?>
            <!--get the entire post instead of the excerpt, uncomment below-->
            <?php /*?><?php the_content(); ?><?php */?>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
     

        <div class="row border-top space-after">
          <h1 class="cat-butt">news</h1>
        </div>
        
        <div class="row">
          <!--Query the database and show my 4 posts from the news category-->
          <?php $custom_query = new
          WP_Query('posts_per_page=4&category_name=news');
          while($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <!--before you start showing me a post, wrap it in a div with a bootstrap class-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 push" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!--get the thumbnail; you created this with 'featured image'-->
            <div class="crop-sub"><?php the_post_thumbnail( 'full' ); ?></div>
            <!--get the post title, wrap it in an h3 tag and make it a hyper link to the actual post-->
            <h3 class="the-title-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!--get the author's name-->
            <p class="author">by&nbsp;<?php the_field('article_author'); ?></p>
            <!--get the excerpt-->
            <p class="article_subhead"><?php the_field('article_subhead'); ?></p>
            <!--get the entire post instead of the excerpt, uncomment below-->
            <?php /*?><?php the_content(); ?><?php */?>
            </div>
        
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
        </div>
          
        <div class="row border-top space-after">
          <h1 class="cat-butt">music</h1>
        </div>
        
        <div class="row">
          <!--Query the database and show my 4 posts from the music category-->
          <?php $custom_query = new
          WP_Query('posts_per_page=4&category_name=music');
          while($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <!--before you start showing me a post, wrap it in a div with a bootstrap class-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 push" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!--get the thumbnail; you created this with 'featured image'-->
            <div class="crop-sub"><?php the_post_thumbnail( 'full' ); ?></div>
            <!--get the post title, wrap it in an h3 tag and make it a hyper link to the actual post-->
            <h3 class="the-title-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!--get the author's name-->
            <p class="author">by&nbsp;<?php the_field('article_author'); ?></p>
            <!--get the excerpt-->
            <p class="article_subhead"><?php the_field('article_subhead'); ?></p>
            <!--get the entire post instead of the excerpt, uncomment below-->
            <?php /*?><?php the_content(); ?><?php */?>
            </div>
        
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
        </div>

        <div class="row border-top space-after">
          <h1 class="cat-butt">arts</h1>
        </div>
        
        <div class="row">
          <!--Query the database and show my 4 posts from the arts category-->
          <?php $custom_query = new
          WP_Query('posts_per_page=4&category_name=arts');
          while($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <!--before you start showing me a post, wrap it in a div with a bootstrap class-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 push" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!--get the thumbnail; you created this with 'featured image'-->
            <div class="crop-sub"><?php the_post_thumbnail( 'full' ); ?></div>
            <!--get the post title, wrap it in an h3 tag and make it a hyper link to the actual post-->
            <h3 class="the-title-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!--get the author's name-->
            <p class="author">by&nbsp;<?php the_field('article_author'); ?></p>
            <!--get the excerpt-->
            <p class="article_subhead"><?php the_field('article_subhead'); ?></p>
            <!--get the entire post instead of the excerpt, uncomment below-->
            <?php /*?><?php the_content(); ?><?php */?>
            </div>
        
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
        </div>
        
          <div class="row border-top space-after">
          <h1 class="cat-butt">events</h1>
        </div>
        
        <div class="row">
          <!--Query the database and show my 4 posts from the events category-->
          <?php $custom_query = new
          WP_Query('posts_per_page=4&category_name=events');
          while($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <!--before you start showing me a post, wrap it in a div with a bootstrap class-->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 push" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <!--get the thumbnail; you created this with 'featured image'-->
            <div class="crop-sub"><?php the_post_thumbnail( 'full' ); ?></div>
            <!--get the post title, wrap it in an h3 tag and make it a hyper link to the actual post-->
            <h3 class="the-title-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <!--get the author's name-->
            <p class="author">by&nbsp;<?php the_field('article_author'); ?></p>
            <!--get the excerpt-->
            <p class="article_subhead"><?php the_field('article_subhead'); ?></p>
            <!--get the entire post instead of the excerpt, uncomment below-->
            <?php /*?><?php the_content(); ?><?php */?>
            </div>
        
          <?php endwhile; ?>
          <?php wp_reset_postdata(); // reset the query ?>
        </div>
  
          
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
