<?php
get_header();
?>

<main>
    <section class="blog-single-page">
        <div class="container">
            <?php
            $memberDescription = get_field("member_description");
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-5 ">
                            <h1 class="blog-single-title text-uppercase mb-3 mb-md-5"><?php the_title(); ?></h1>
                            <p class="blog-single-description">
                                <?php echo $memberDescription; ?>
                            </p>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <?php the_post_thumbnail("team-single"); ?>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>