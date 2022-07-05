<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $featureImage =  get_the_post_thumbnail_url(get_the_ID(), "full");
            ?>
            <section class="blog-single-page">
                <div class="container">
                    <?php
                            $blogCategories = get_the_category(get_the_ID());
                            foreach ($blogCategories as $blogCategory) {
                                ?>
                        <a href="<?php echo get_category_link($blogCategory->term_id) ?>" class="text-dark text-decoration-none blog-data">
                            <b><?php echo ucfirst($blogCategory->name) ?> |</b> <i><?php echo get_the_date("y/m/d") ?></i> </a>
                    <?php
                            }
                            ?>
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-5 blog-single-description ">
                            <h1 class="blog-single-title text-uppercase mb-3 mb-md-5"><?php the_title(); ?></h1>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="col-12 col-lg-6 ">
                            <img class=" h-100" src="<?php echo $featureImage ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="blog-content-product">
                <div class="container">
                    <div class="row justify-content-lg-center  ">
                        <div class="col-12  col-lg-8 mb-5 blog-content-description ">
                            <?php the_content(); ?>
                            <div>
                                <p class="blog-tags">Tags:</p>
                                <div>
                                    <?php
                                            $blogTags = get_the_tags(get_the_ID());
                                            foreach ($blogTags as $blogTag) {
                                                ?>
                                        <a href="<?php echo get_tag_link($blogTag->term_id) ?>" class=" tags-link d-inline-block text-lowercase text-decoration-none bg-light px-5 py-2 text-dark"><?php echo $blogTag->name ?></a>

                                    <?php
                                            }

                                            ?>
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