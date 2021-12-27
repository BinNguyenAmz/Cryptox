<h1>Posts Latest</h1>
<?php


    $posts_latest = get_field('posts_latest', 68);

    // echo '<pre>';
    // var_dump($posts_latest);
    // echo '</pre>';

    foreach($posts_latest as $post) {
        ?>
        
            <h1>
                <a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title; ?></a>
            </h1>
           
            <p><?php echo $post->post_content ?></p>

            <p><?php echo get_field('date', $post->ID) ?></p>

            <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="<?php echo $post->post_title; ?>">

            <p><?php echo get_the_post_thumbnail_url($post); ?></p>

        <?php
    }
?>
<span>-------------------------------------------------------------------------</span>

<h1>Posts Center</h1>
<?php

    $posts_center = get_field('posts_center', 68);

    foreach($posts_center as $post) {
        ?>
          <h1>
                <a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title; ?> </a>
            </h1>

            <p><?php echo $post->post_content ?></p>

            <p><?php echo get_field('date', $post->ID) ?></p>

            <img src="<?php echo get_the_post_thumbnail_url($post); ?>" alt="<?php echo $post->post_title; ?>">

            <p><?php echo get_the_post_thumbnail_url($post); ?></p>
        <?php
    }
?>