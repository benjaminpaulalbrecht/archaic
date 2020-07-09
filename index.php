<?php
get_header(); ?>

<div id="archaic_main" class="row">
    <div id="archaic_content" class="col-lg-8 col-sm-8 col-md-8 col-xs=12">

	<div class="row">
	    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<div clsas="col-lg-6 col-sm-6 col-md-6 col-xs-12">
		    <h1><?php the_title(); ?></h1>
		    <h4> Posted on <?php the_time('F jS, Y'); ?></h4>
		    <p><?php the_content(__('(more...)')); ?></p>
		</div>
	    <?php endwhile; else: ?>
	    <p><?php _e('Darn! we just cant fiiind it!'); ?></p>
	    <?php endif; ?>
	</div>
    </div>
    <?php get_sidebar(); ?> 
</div>

