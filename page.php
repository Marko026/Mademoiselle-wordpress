<?php get_header(); ?>


<main>
    <?php get_template_part("./theme-partials/lead-section") ?>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <section class="section-about">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-8 animation" data-animation="slide-right">
                            <article class="about-items">
                                <?php the_content(); ?>
                            </article>
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