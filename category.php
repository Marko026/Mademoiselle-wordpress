<?php
get_header();
?>

<?php
$term = get_queried_object();
$categoryImage = get_field('taxonomy_image', $term);

?>
<section class="lead-page text-center " style="background-image: url(<?php echo $categoryImage ?>)">
    <h1 class="lead-title text-white"><?php single_cat_title();  ?></h1>
</section>
<main>
    <?php get_template_part("./theme-partials/loop-post") ?>
</main>
<?php
get_footer();
?>