<!-- ZivahowyServer Wordpress template -->
<!-- v. 1.004 -->
<!-- By Michal Futera -->
<!-- http://linktr.ee/mjfutera -->


<?php get_header(); ?>
        <div class="container bg-white rounded mt-2">
            <div class="row p-3">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9" rowspan="2">
                    <div class="container">
                        <div class="row">
                            
                        
<!-- Blog posts -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="container">
                        <div class="row">
                            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-3">
                            <a href="<?php echo get_permalink()?>">
                                <?php 
                                    if ( has_post_thumbnail() ) { 
                                        the_post_thumbnail( 'full', array( 'class' => 'size-post-thumbnail') ); 
                                    } 
                                ?>
                            </a>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
                                <h2>
                                    <a href="<?php echo get_permalink()?>">
                                        <?php echo get_the_title(); ?>
                                    </a>
                                </h2>
                                    <?php echo get_the_post(); ?>
                                <br>
                                <a href="<?php echo get_permalink()?>">
                                    <div class="btn btn-success">Read article</div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <hr>
                    <?php endwhile; else : ?>
	                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                <!-- Blog posts -->

                        </div>
                    </div>   
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php get_footer(); ?>