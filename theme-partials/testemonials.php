<?php
$arg = array(
    "posts_per_page" => -1,
    "post_type" => "testimonials_members",
    "order" => "ASC",
);
$members = new WP_Query($arg);

if ($members->have_posts()) {
    ?>
    <section class="blog-section">
        <div class="container">
            <?php
                if (is_front_page()) {
                    ?>
                <h2 class="blog-title text-center text-md-left"><?php the_field("trust_professionals") ?></h2>
            <?php
                }
                ?>
            <div class="row owl-one owl-carousel owl-theme ">
                <?php
                    while ($members->have_posts()) {
                        $members->the_post();
                        ?>
                    <ul class="blog-carousel list-unstyled d-flex flex-column flex-md-row justify-content-md-between justify-content-lg-around">
                        <li class="col-12 col-md-6 col-lg-4 ">
                            <div class="item">
                                <div class="item__img">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail("team-small"); ?></a>
                                </div>
                            </div>
                        </li>
                        <li class="col-12 col-md-6 col-lg-4">
                            <div class="item item-content ">
                                <h3 class="blog-content-title mb-3 mb-lg-5 text-uppercase"><a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?></a></h3>
                                <div class="blog-desecription">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php
                    }
                    ?>
            </div>
        </div>
    </section>
<?php

} else {
    ?>
    <div class="jumbotron">
        <h2>There are no members to show.</h2>
    </div>
<?php
}


wp_reset_postdata();
?>