<section class="contact-data text-center">
    <div class="contact-data-group ">
        <?php
        // Template Name: Contact data

        $address = get_option('mademoiselle_address');
        $phone = get_option('mademoiselle_phone');
        $phone2 = get_option('mademoiselle_phone_2');
        $email = get_option('mademoiselle_email');
        $email2 = get_option('mademoiselle_email_2')
        ?>
        <?php
        if (!empty($address)) {
            ?>
            <a class="contact-link-page" href="#"><?php echo $address; ?></a>
        <?php
        }
        ?>
        <?php
        if (!empty($phone)) {
            ?>
            <a class="contact-link-page" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>

        <?php
        }
        ?>
        <?php
        if (!empty($phone2)) {
            ?>
            <a class="contact-link-page" href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>

        <?php
        }
        ?>
        <?php
        if (!empty($email)) {
            ?>
            <a class="contact-link-page" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>

        <?php
        }
        ?>
        <?php
        if (!empty($email2)) {
            ?>
            <a class="contact-link-page" href="mailto:<?php echo $email2; ?>"><?php echo $email2; ?></a>

        <?php
        }
        ?>
    </div>
</section>