<?php 

function corporate_firm_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'corporate-firm-theme-settings', // Menu slug
        'corporate_firm_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'corporate_firm_add_admin_menu' );

function corporate_firm_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'corporate-firm' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'corporate_firm_settings_group' );
            do_settings_sections( 'corporate-firm-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function corporate_firm_register_settings() {
    register_setting( 'corporate_firm_settings_group', 'corporate_firm_enable_animations' );

    add_settings_section(
        'corporate_firm_settings_section',
        __( 'Animation Settings', 'corporate-firm' ),
        null,
        'corporate-firm-theme-settings'
    );

    add_settings_field(
        'corporate_firm_enable_animations',
        __( 'Enable Animations', 'corporate-firm' ),
        'corporate_firm_enable_animations_callback',
        'corporate-firm-theme-settings',
        'corporate_firm_settings_section'
    );
}
add_action( 'admin_init', 'corporate_firm_register_settings' );

function corporate_firm_enable_animations_callback() {
    $checked = get_option( 'corporate_firm_enable_animations', true );
    ?>
    <input type="checkbox" name="corporate_firm_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

