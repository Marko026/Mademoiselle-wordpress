<?php
get_header();
?>
<?php
$term = get_queried_object();
$tagImage = get_field('tag_image', $term);
?>
<section class="lead-page text-center " style="background-image: url(<?php echo $tagImage ?>)">
    <h1 class="lead-title text-white"><?php single_tag_title();  ?></h1>
</section>
<main>
    <?php get_template_part("./theme-partials/loop-post") ?>
</main>
<?php
get_footer();
?>