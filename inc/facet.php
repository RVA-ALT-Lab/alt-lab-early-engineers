<?php while ( have_posts() ): the_post(); ?>
<div class="row facet-lesson">
	<div class="col-md-10 facet-lesson-info">
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	</div>
	<div class="col-md-2">
		<a class="btn btn-workshop" data-toggle="collapse" href="#<?php echo $post->post_name?>" role="button" aria-expanded="false" aria-label="more details about the <?php the_title(); ?> workshop">+</a>		
	</div>
		<div class="collapse" id="<?php echo $post->post_name?>">
		  <div class="card card-body">
		    <?php the_content()?>
			<a class="workshop-learn-more" href="<?php the_permalink(); ?>">Learn more about the <?php the_title(); ?> workshop</a>
		  </div>
		</div>
	</div>
<?php endwhile; ?>