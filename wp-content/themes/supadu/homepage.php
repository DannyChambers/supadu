
<?php /* Template Name: Homepage */ 
get_header(); 
?>
	<div class="container">


		<?php $temp_post = $post; // Storing the object temporarily

			$products = new WP_Query( array(
								'post_type' => 'product',
							    'posts_per_page'    => 5
							) );

			if($products->have_posts()) : ?>

            <div class="product_list">
                <ul>

					<?php while($products->have_posts()) : 

						$products->the_post();

					?>

						<li>

	                        <a href="<?php the_permalink(); ?>" class="product">

	                        	<div class="product_header">

	                        		<img src="https://via.placeholder.com/400x250" />

		                            <h2 class="h3 product_title"><?php the_title(); ?></h2>

	                            	<p class="t2"><?php echo excerpt(40); ?></p>

	                           	</div>

	                        </a>

				        </li>

					<?php

						endwhile;

					?>
				
                </ul>
            </div>

            <?php else: ?>

        	<br/><br/>

			<p class="h3 text-centre">Oops, there are no more products.</p>

			<br/><br/><br/><br/>

			<?php endif; wp_reset_query(); ?>















































	</div><!--End .container -->
<?php get_footer(); ?>