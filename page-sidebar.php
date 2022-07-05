<?php get_header();
// Template Name: Page Sidebar
?>

<main>
    <?php get_template_part("./theme-partials/lead-section") ?>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <section class="section-about">
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-12 col-lg-8 animation" data-animation="slide-right">
                            <article class="about-items">
                                <?php the_content(); ?>
                            </article>
                        </div>
                        <div class="col-md-8 col-lg-4 ">
                            <div class="about-product position-relative mb-5 ">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
    <?php
        }
    }
    ?>
</main>

<?php get_footer(); ?>