<div class="row row-contents">
    <div class="col-xs-12 col-sm-12" id="content">
        <article id="post">
            <h1><?php the_title(); ?></h1>
            <small><?php the_time('F jS, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                | Posted in
                <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = '';

                    if($categories){
                        foreach($categories as $category){
                            $output .= '<a href="'.get_category_link($category->term_id). '">' .$category->cat_name. '</a>' . $separator;
                        }
                        echo trim($output, $separator);
                    }
                ?>
            </small>
            <p><?php the_content(); ?></p>
        </article>
    </div>
</div>