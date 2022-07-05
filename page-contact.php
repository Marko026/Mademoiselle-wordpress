<?php
// Template Name: Contact Page
get_header();
?>
<main>
    <section class="contact position-relative ">
        <div class="map mb-5 mb-md-0">
            <?php the_field('contact_map') ?>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 ">
                    <h2 class="contact-page-title"><?php the_field("contact_title") ?></h2>
                    <form method="post" class="contact-form">
                        <?php the_content(); ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part("./theme-partials/contact-data") ?>
</main>
<?php
get_footer();
?>