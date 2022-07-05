<?php
get_header();
?>
<main>
    <section class="service-single-page">
        <div class="container">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="row justify-content-between ">
                        <div class="col-12 col-md-6">
                            <?php the_post_thumbnail("service-images"); ?>
                        </div>
                        <div class="col-12 col-md-5">
                            <article class="service-single-content">
                                <h1 class="service-single-title mb-5 mt-4 mt-md-0"><?php the_title() ?></h1>
                                <div class="service-single-description">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
    <div class="container">
        <h2 class="product-heading text-center text-md-left">Stay Up with the Latest Beauty Trends</h2>
    </div>
    <?php get_template_part("./theme-partials/lastBlogNews") ?>
</main>
<?php
get_footer();
?>