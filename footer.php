<footer class="footer text-center">
    <?php
    $menuLocation = get_nav_menu_locations();
    $socialMenuID = $menuLocation["social-menu"];
    $socialMenuItems = wp_get_nav_menu_items($socialMenuID);

    if ($socialMenuItems) {
        ?>
        <div class="social mb-2">
            <?php
                foreach ($socialMenuItems as $socialMenuItem) {
                    if ($socialMenuItem->menu_item_parent == 0) {
                        ?>
                    <a class="fab fa-<?php echo strtolower($socialMenuItem->title);
                                                    if ($socialMenuItem->title == 'facebook') {
                                                        echo '-f';
                                                    } ?>" href="<?php echo $socialMenuItem->url ?>"></a>

            <?php
                    }
                }
                ?>
        </div>
    <?php
    }

    ?>

    <p class="copyright">Copyright &copy; <?php echo date('Y') ?><a class="text-decoration-none text-dark" href=" <?php echo home_url() ?>"> <?php bloginfo(" name") ?></a></p>
</footer>
<?php wp_footer() ?>
</body>


</html>