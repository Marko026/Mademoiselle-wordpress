<?php

/**
 * Add widget.
 */
class AboutWidget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'about_widget', // Base ID
            'about_widget', // Name
            array('description' => __('Display blog news', 'Mademoiselle'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }

        $queryArgs = array(
            "posts_per_page" => 3,
            "post_type" => "post",
            "orderby" => "date"
        );
        $aboutWidget = new WP_Query($queryArgs);

        while ($aboutWidget->have_posts()) {
            $aboutWidget->the_post();
            ?>
            <div class="position-relative">
                <article class="product-item mb-5">
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail("blog-single"); ?>
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
                wp_reset_postdata();
                echo $after_widget;
            }
            /**
             * Back-end widget form.
             *
             * @see WP_Widget::form()
             *
             * @param array $instance Previously saved values from database.
             */
            public function form($instance)
            {
                if (isset($instance['title'])) {
                    $title = $instance['title'];
                } else {
                    $title = __('New title', 'text_domain');
                }
                ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class Foo_Widget

?>
<?php
// Register About  widget

function mademoiselle_custom_widget()
{
    register_widget('AboutWidget');
}
add_action('widgets_init', 'mademoiselle_custom_widget');
?>

<?php
//Search widget 

/**
 * Add widget.
 */
class SearchWidget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'search_widget', // Base ID
            'search widget', // Name
            array('description' => __('Search', 'Mademoiselle'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        ?>


        <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>" class="search-form">
            <div class="search input-group mb-3">
                <input value="<?php echo get_search_query() ?>" type="text" class="form-control w-100 search-field" placeholder="<?php esc_attr("Search...", "Theme_domain") ?>Search..." aria-label="" aria-describedby="basic-addon1" name="s" required>
                <div class="input-group-prepend">
                    <button class="position-absolute fas fa-search btn btn-outline-secondary border-0" type="submit"></button>
                </div>
            </div>
        </form>
    <?php

            echo $after_widget;
        }
        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance)
        {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('New title', 'text_domain');
            }
            ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class Search

?>
<?php
// Register Search  widget

function search_custom_widget()
{
    register_widget('SearchWidget');
}
add_action('widgets_init', 'search_custom_widget');
?>