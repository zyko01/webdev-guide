<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <?php 
                if(have_posts() ) :
                    while(have_posts()) : the_post(); 
                        get_template_part('content', get_post_format() );

                    endwhile;
                        else:
                            echo '<p>No Content Found</p>';

                endif;
            ?>
        </div>

        <div class="col-xs-12 col-sm-4">
                <?php get_sidebar(); ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>