<?php
$post_args = array(
    'post_type' => 'wpmm_theme',
    'post_status' => 'publish',
    'order_by'      => 'desc'
);
$query = new WP_Query($post_args);

?>

<div class="wrap wpmm-wrap wpmm-theme-listing">

    <div class="wpmm-theme-head clearfix">
        <div class="left">
            <?php _e('Mega Menu Themes', 'wp-megamenu'); ?>
        </div>
        <div class="right">
            <a class="page-title-action" href="<?php echo admin_url('admin.php?page=wp_megamenu_themes&section=add_theme'); ?>"><?php _e('Create New Theme', 'wp-megamenu'); ?></a>
        </div>
    </div>
    
    <?php
    if ($query->have_posts()){
        ?>
        <div class="wpmm-tabs-content wpmm-theme-list-content">
            <table class="form-table wpmm-option-table wpmm-theme-list-table">
                <?php
                while ($query->have_posts()): $query->the_post();

                    ?>

                    <tr class="wpmm-field wpmm-field-group wpmm-theme-list-tr">
                        <th>
                            <a href="<?php echo admin_url('admin.php?page=wp_megamenu_themes&section=add_theme&theme_id='.get_the_ID()); ?>">
                                <?php the_title(); ?>
                            </a>
                        </th>
                        <td class="text-right">
                            <a class="btn-edit" href="<?php echo admin_url('admin.php?page=wp_megamenu_themes&section=add_theme&theme_id='.get_the_ID()); ?>"> <i class="dashicons dashicons-edit"></i> </a>

                            <a class="btn-close deleteWpmmTheme" href="javascript:;" data-id="<?php the_ID(); ?>"> <i class="dashicons
    dashicons-trash"></i> </a>
                        </td>

                    </tr>

                <?php endwhile; ?>
            </table>

        </div>
        <?php
        $query->reset_postdata();
    }
    ?>

    <div class="wrap wpmm-wrap wpmm-theme-listing wpmm-theme-listing-import">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="wpmm-theme-head-import clearfix">
                <div class="left wpmm-form-submit-button submit-btn-wrap btn-theme-setting-wrap">
                    <p class="submit">
                        <label class="wpmm-import-label">
                            <input type="file" name="wpmm_theme_import_file" />
                            
                            <?php wp_nonce_field( 'wpmmm_import_theme_action', 'wpmmm_import_theme_nonce_field' ) ?>
                            <input name="submit" id="submit" class="button button-primary" value="<?php _e('Import Theme', 'wp-megamenu') ?>" type="submit">

                        </label>
                    </p>
                </div>
            </div>
        </form>
    </div>



    <div class="wrap wpmm-wrap wpmm-theme-listing wpmm-theme-listing-import">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="wpmm-theme-head-import clearfix">
                <div class="left wpmm-form-submit-button submit-btn-wrap btn-theme-setting-wrap">
                    <p class="submit">
                        <label class="wpmm-import-label">
                            <input type="file" name="wpmm_import_menu_file" />
                            
							<?php wp_nonce_field( 'wpmmm_import_menu_action', 'wpmmm_import_menu_nonce_field' ) ?>
                            <input name="submit" id="submit" class="button button-primary" value="<?php _e('Import Menu', 'wp-megamenu') ?>" type="submit">
                        </label>
                    </p>
                </div>
            </div>
        </form>
    </div>


</div>



<?php

/*$theme_id = 1783;
wpmm_fields_group_generator(
    array(
        'fields_group_id'   => 'wpmm_theme_settings',
        'form_action'       => '',
        'sections'      => array(
            'id'            => 'general_settings',
            'section_name'  => __('General Setttings', 'wp-megamenu'),

            'fields'        => array(
                'type'      => 'checkbox',
                'name'      => 'enable_sticky_menu',
                'label'     => __(' Enable Sticky menu', 'wp-megamenu'),
                'default'   => null,
                'value'     => get_wpmm_theme_option('enable_sticky_menu', $theme_id),
            )
        )
    )
);
*/
?>
