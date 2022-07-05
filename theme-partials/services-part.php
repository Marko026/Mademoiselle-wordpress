<?php
$arg = array(
    "post_per_page" => -1,
    "post_type" => "our_services",
    "order" => "ASC",
    "orderby" => "data"
);
$services = new WP_Query($arg);
if ($services->have_posts()) {
    ?>
    <section class="service-section">
        <div class="container">
            <?php
                if (is_front_page()) {
                    ?>
                <h2 class="service-title text-center text-md-left mb-5 mb-lg-0"><?php the_field("our_services_title") ?></h2>
            <?php
                }
                while ($services->have_posts()) {
                    $services->the_post();
                    $serviceLink = get_field("service_link");
                    ?>
                <article class="service-item">
                    <div class="row no-gutters">
                        <div class=" service-image col-12 col-md-6 animation " data-animation="slide-left">
                            <a class="d-block" href="<?php echo get_permalink(); ?>">
                                <?php the_post_thumbnail("service-images"); ?>
                            </a>
                        </div>
                        <div class="service-content state-hover col-12 col-md-6 animation" data-animation="slide-right">
                            <h3 class="service-item-title my-4">
                                <a class="d-block title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <a class="link-btn text-uppercase btn btn-dark rounded-0  text-dark py-3 px-5 mb-5" href="<?php echo get_permalink(); ?>"><?php echo $serviceLink ?></a>
                        </div>
                    </div>
                </article>
            <?php
                }
                ?>
        </div>
    </section>
<?php
}
wp_reset_postdata();
?>