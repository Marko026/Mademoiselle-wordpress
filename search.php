<?php
get_header();
?>
<main>
    <section class="lead-page text-center " style="background-image: url(<?php bloginfo("url");
                                                                            echo "/wp-content/uploads/2022/05/pexels-pixabay-1605141-scaled.jpg" ?>)">
        <h1 class=" font-weight-bold display-1   text-white text-left service-single-title text-capitalize mb-5 mt-4 mt-md-0">Search results for : <?php echo get_search_query(); ?></h1>
    </section>

    <section class="search-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <?php
                    if (have_posts()) {
                        ?>
                        <section class="products-section blog-section-single">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        while (have_posts()) {
                                            the_post();
                                            ?>
                                        <div class=" position-relative ">
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
                </div>
                <div class="col-12 col-md-4">
                    <aside>
                        <div class="about-product position-relative mb-5 ">
                            <?php get_sidebar(); ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>




</main>


<?php get_footer(); ?>