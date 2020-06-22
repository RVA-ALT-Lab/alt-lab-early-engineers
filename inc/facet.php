<?php while ( have_posts() ): the_post(); ?>
		<div class="col-md-4 facet-lesson-info">
			<?php echo get_the_post_thumbnail( $post->ID, '', array('class' => 'lesson-thumb') );?>
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<a class="btn btn-workshop" data-toggle="collapse" href="#<?php echo $post->post_name?>" role="button" aria-expanded="false" aria-label="more details about the <?php the_title(); ?> workshop">+</a>
			<div class="collapse" id="<?php echo $post->post_name?>">
			  <div class="card card-body">
			    <?php the_content()?>
				<a class="workshop-learn-more" href="<?php the_permalink(); ?>">Learn more about the <?php the_title(); ?> lesson.</a>
			  </div>
			</div>
		</div>
<?php endwhile; ?>