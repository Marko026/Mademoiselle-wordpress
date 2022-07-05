<?php

if (is_home() && get_option('page_for_posts')) {

    $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), "full");
    $our_title = get_the_title(get_option('page_for_posts'), true);
} else {
    $leadImage = get_the_post_thumbnail_url(get_the_ID(), "full");
    $our_title = get_the_title();
}
?>
<section class="lead-page text-center " style="background-image: url(<?php echo $leadImage; ?>)">
    <h1 class="lead-title text-white"><?php echo $our_title ?></h1>
</section>