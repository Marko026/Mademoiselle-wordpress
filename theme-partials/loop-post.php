<?php
if (have_posts()) {
    ?>
    <section class="products-section blog-section-single">
        <div class="container">
            <div class=" owl-carousel owl-theme">
                <div class="row">
                    <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                        <div class="col-md-6 col-lg-4 position-relative ">
                            <article class="product-item">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail("blog-single"); ?>
                                </a>
                                <div class="product-content text-center">
                                    <a class=" text-decoration-none text-dark link-product " href="<?php the_permalink() ?>"><?php echo get_the_date("d/m/y") ?></a>
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
        </div>
    </section>
    <section class="blog-pagination">
        <div class="container">
            <?php the_posts_pagination(array(
                    'prev_text' => "<<",
                    'next_text' => ">>",
                    "mid-size" => "2"
                )); ?>
        </div>
    </section>
<?php
} else { ?>
    <section class="products-section blog-section-single">
        <div class="container">
            <div class=" owl-carousel owl-theme">
                <div class="row">
                    <div class="col-md-6 col-lg-4 position-relative mb-5">
                        <div class="jumbotron">
                            <h1>There is no posts available</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}

?>