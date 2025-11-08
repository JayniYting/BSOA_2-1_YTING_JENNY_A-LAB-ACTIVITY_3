<?php 

function farm_cultivation_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'farm-cultivation-theme-settings', // Menu slug
        'farm_cultivation_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'farm_cultivation_add_admin_menu' );

function farm_cultivation_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'farm-cultivation' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'farm_cultivation_settings_group' );
            do_settings_sections( 'farm-cultivation-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function farm_cultivation_register_settings() {
    register_setting( 'farm_cultivation_settings_group', 'farm_cultivation_enable_animations' );

    add_settings_section(
        'farm_cultivation_settings_section',
        __( 'Animation Settings', 'farm-cultivation' ),
        null,
        'farm-cultivation-theme-settings'
    );

    add_settings_field(
        'farm_cultivation_enable_animations',
        __( 'Enable Animations', 'farm-cultivation' ),
        'farm_cultivation_enable_animations_callback',
        'farm-cultivation-theme-settings',
        'farm_cultivation_settings_section'
    );
}
add_action( 'admin_init', 'farm_cultivation_register_settings' );

function farm_cultivation_enable_animations_callback() {
    $checked = get_option( 'farm_cultivation_enable_animations', true );
    ?>
    <input type="checkbox" name="farm_cultivation_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

