<?php
function mademoiselle_option_page()
{
    add_menu_page(
        "Option Page",
        "Contact data",
        "administrator",
        "option_page",
        "mademoiselle_contact_data",
        'dashicons-id',
        "19",
    );
}
add_action('admin_menu', "mademoiselle_option_page");


function mademoiselle_contact_settings()
{

    register_setting("mademoiselle_contact_data", "mademoiselle_address");
    register_setting("mademoiselle_contact_data", "mademoiselle_phone");
    register_setting("mademoiselle_contact_data", "mademoiselle_phone_2");
    register_setting("mademoiselle_contact_data", "mademoiselle_email");
    register_setting("mademoiselle_contact_data", "mademoiselle_email_2");
}
add_action("init", "mademoiselle_contact_settings");

function mademoiselle_contact_data()
{
    ?>
    <form action="options.php" method="post">
        <?php
            settings_fields("mademoiselle_contact_data");
            do_settings_sections("mademoiselle_contact_data");
            ?>
        <table class="form-table">
            <tr>
                <th>Address:</th>
                <td>
                    <input type="text" name="mademoiselle_address" value="<?php esc_attr(get_option("mademoiselle_address")) ?>">
                </td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>
                    <input type="text" name="mademoiselle_phone" value="<?php esc_attr(get_option("mademoiselle_phone")) ?>">
                </td>
            </tr>
            <tr>
                <th>Mobile Phone:</th>
                <td>
                    <input type="text" name="mademoiselle_phone_2" value="<?php esc_attr(get_option("mademoiselle_phone_2")) ?>">
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="text" name="mademoiselle_email" value="<?php esc_attr(get_option("mademoiselle_email")) ?>">
                </td>
            </tr>
            <tr>
                <th>Email 2:</th>
                <td>
                    <input type="text" name="mademoiselle_email_2" value="<?php esc_attr(get_option("mademoiselle_email_2")) ?>">
                </td>
            </tr>
        </table>

        <?php submit_button(); ?>
    </form>


<?php
}
