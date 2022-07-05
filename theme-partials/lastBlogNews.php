<?php
$arg = array(
    "posts_per_page" => 3,
    "post_type" => "post",
    "orderby" => "date"
);
$lastBlogNews = new WP_Query($arg);

if ($lastBlogNews->have_posts()) {
    $lastNewsTitle = get_field("title_beauty_trends");
    ?>
    <section class="products-section">
        <div class="container">
            <h2 class="product-heading text-center text-md-left"><?php echo $lastNewsTitle ?></h2>
            <div class="row text-center">
                <?php
                    while ($lastBlogNews->have_posts()) {
                        $lastBlogNews->the_post();
                        ?>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <article class="product-item">
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail("blog-list"); ?>
                            </a>
                            <div class="product-content text-center position-absolute ">
                                <a class=" text-decoration-none text-dark link-product " href="<?php the_permalink() ?>"><?php echo get_the_date("y/m/d") ?></a>
                                <h6 class="product-content-description text-center text-uppercase">
                                    <a class="text-decoration-none text-dark" href="<?php the_permalink() ?>">
                                        <?php the_title(); ?></a>
                                </h6>
                            </div>
                        </article>
                    </div>
                <?php
                    }

                    ?>
            </div>
        </div>
    </section>
<?php

}

wp_reset_postdata();
?>