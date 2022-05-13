<?php get_header(); ?>


	<div id="home-wrapper">

		<div id="home-row1">
			<div id="home-row1-content">
				<div id="home-row1-box">
					<!-- home slider -->

					<div id="home-slider">
						<?php
						// Query the Post type Slides
						$querySlides = array(
							'post_type'      => 'slides',
							'posts_per_page' => '-1'
						);
						// The Query
						$the_query = new WP_Query( $querySlides );
						?>
						<?php
						// The Loop
						if ( $the_query->have_posts() ) : ?>

							<div class="flexslider">
								<ul class="slides">
									<?php while ( $the_query->have_posts() ) : ?>
										<?php $the_query->the_post(); $image = get_field( 'slide_image' ); 


										if ( ! empty( $image ) ) {
											$class = 'hasinfo';
										} else {
											$class = 'noinfo';
										}
										?>

										<li>

											<div class="newbox <?php echo $class; ?>  blocksx">
												<div class="info">
													<?php the_content(); ?>
												</div>
												
											</div>
											<?php
											// check if the post has a Post Thumbnail assigned to it.
											// if ( has_post_thumbnail() ) {
											// 	the_post_thumbnail();
											// }
											?>

											<?php 
											
												if ( ! empty( $image ) ): ?>
												<div class="fleximg blocksx <?php echo $class; ?>">
													<div class="slideImage" style="background-image:url('<?php echo $image['url']; ?>')"></div>
													<img src="<?php echo $image['url']; ?>"
													     alt="<?php echo $image['alt']; ?>"
													      />
												</div>
													
												<?php endif; ?>

											<!-- <div class="project-box-wrapper">
												<div class="project-box">
													<?php //the_content(); ?>
												</div>
											</div> -->


											<!-- <div id="slider-next-spacer">
												<div id="slider-next-spacer-padding">See Next</div>
											</div> -->

										</li>

									<?php endwhile; ?>
								</ul><!-- slides -->

								<!-- <div id="slidenav">
									<ul>
										<li><a id="slider-next">Next</a></li>
										<li><a id="slider-prev" href="#">Prev</a></li>
									</ul>
								</div> -->

							</div><!-- .flexslider -->


						<?php endif; // end loop ?>

						<?php wp_reset_postdata(); ?>

					</div>


					<!-- -------------- -->

					<div id="home-slider2">
						<?php
						// Query the Post type Slides
						$querySlides = array(
							'post_type'      => 'slides',
							'posts_per_page' => '-1'
						);
						// The Query
						$the_query = new WP_Query( $querySlides );
						?>
						<?php
						// The Loop
						if ( $the_query->have_posts() ) : ?>

							<!-- <div class="flexslider2">
								<ul class="slides"> -->
									<?php while ( $the_query->have_posts() ) : ?>
										<?php $the_query->the_post(); ?>

										<!-- <li>
											<?php
											// check if the post has a Post Thumbnail assigned to it.
											if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											}
											?>


											<div class="project-image">

												<?php
												$image = get_field( 'slide_image' );
												if ( ! empty( $image ) ): ?>
													<img src="<?php echo $image['url']; ?>"
													     alt="<?php echo $image['alt']; ?>"/>
												<?php endif; ?>

											</div>


										</li> -->

									<?php endwhile; ?>
								<!-- </ul>
							</div> -->


						<?php endif; // end loop ?>

						<?php wp_reset_postdata(); ?>

					</div>


					<!-- -------------- -->

					<!-- / home slider -->


				</div>


			</div>


		</div><!-- home row1 -->


		<div id="home-row2">
			<div id="home-row2-content">
				<?php $recent = new WP_Query( "page_id=166" );
				while ( $recent->have_posts() ) : $recent->the_post(); ?>


					<div id="home-box2">
						<h2><a href="<?php the_field( 'learn_more' ); ?>"><?php the_field( 'box_1_heading' ); ?></a>
						</h2>
						<div class="home-box-text"><?php the_field( "volunteers" ); ?></div>
						<div class="home-box-icon"><?php
							$image = get_field( 'volunteers_icon' );
							if ( ! empty( $image ) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
							<?php endif; ?></div>
						<div class="home-box-learn-more" id="home-box2-learn-more"><a
								href="<?php the_field( 'learn_more' ); ?>">Learn More</a></div>
					</div>

					<div id="home-box3">
						<h2><a href="<?php the_field( 'learn_more2' ); ?>"><?php the_field( 'box_2_heading' ); ?></a>
						</h2>
						<div class="home-box-text"><?php the_field( "programs_and_services" ); ?></div>
						<div class="home-box-icon"><?php
							$image = get_field( 'programs_&_services_icon' );
							if ( ! empty( $image ) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
							<?php endif; ?></div>
						<div class="home-box-learn-more" id="home-box3-learn-more"><a
								href="<?php the_field( 'learn_more2' ); ?>">Learn More</a></div>
					</div>

					<div id="home-box4">
						<h2><a href="<?php the_field( 'learn_more3' ); ?>"><?php the_field( 'box_3_heading' ); ?></a>
						</h2>
						<div class="home-box-text"><?php the_field( "health_and_wellness_classes" ); ?></div>
						<div class="home-box-icon"><?php
							$image = get_field( 'health_&_wellness_classes_icon' );
							if ( ! empty( $image ) ): ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
							<?php endif; ?></div>
						<div class="home-box-learn-more" id="home-box4-learn-more"><a
								href="<?php the_field( 'learn_more3' ); ?>">Learn More</a></div>
					</div>

				<?php endwhile;
				wp_reset_postdata(); // end of the loop. ?>
			</div>
		</div><!-- home row2 -->


		<div id="home-row3">
			<div id="home-row3-content">
				<div id="home-box1">
					<h2><a href="#">Upcoming Events</a></h2>


					<?php /* Second Custom Query pulling the post type, "Newsletters" */
					$args  = array(
						'post_type'      => array( 'events' ),
						// In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
						'posts_per_page' => '3',
						// # of posts to show use -1 for all posts.
						'meta_query'=> array(
							'relation'=> 'OR',
							array(
								'key'=> 'event_date',
								'compare'=>'NOT EXISTS'
							),
							array(
								'key'=>'event_date',
								'value'=>NULL,
								'compare'=>'='
							),
							array(
								'key'=>'event_date',
								'value'=>date( "Ymd" ),
								'compare'=>'>=',
								'type'=>'NUMERIC'
							),
							array(
								'key'=>'end_date',
								'value'=>date( "Ymd" ),
								'compare'=>'>=',
								'type'=>'NUMERIC'
							)
						)
					);
					$query = new WP_Query( $args );  // Query all of your arguments from above
					?>
					<ul>
						<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); // the loop ?>

							<li><?php
								if ( get_field( 'event_date' ) ) {
									$date = DateTime::createFromFormat( 'Ymd', get_field( 'event_date' ) );
									echo $date->format( 'F j, Y' );
								}
								?><?php if ( strlen( get_post_meta( $post->ID, "end_date", true ) ) > 0 ) : ?> - <?php
									if ( get_field( 'end_date' ) ) {
										$date = DateTime::createFromFormat( 'Ymd', get_field( 'end_date' ) );
										echo $date->format( 'F j, Y' );
									}
									?><?php endif; ?><br><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</li>

						<?php endwhile; endif;
						wp_reset_postdata();  // close loop and reset the query ?>


					</ul>
					<div class="see-more-link-text"><a
							href="<?php bloginfo( 'url' ); ?>/educational-opportunities/">See More</a></div>


				</div>
				<div id="quicklinks">

					<h2>News & Announcements</h2>

					<div id="quicklinks-content">

						<?php $news = new WP_Query( array('post_type'=>'post','posts_per_page'=>5,'order'=>'DESC') );
						if($news->have_posts()):?>
							<ul>
								<?php while ( $news->have_posts() ) : $news->the_post(); ?>
									<li><a href="<?php echo get_the_permalink();?>"><?php the_title(); ?></a></li>
								<?php endwhile;?>
							</ul>
							<?php wp_reset_postdata(); // end of the loop. ?>
						<?php endif;?>


					</div>

				</div>


			</div>
		</div><!-- home row2 -->

	</div>


	<a href="https://plus.google.com/104177206931999535082" rel="publisher"></a>


<?php get_footer(); ?>