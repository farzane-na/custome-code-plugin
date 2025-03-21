<?php
if(!empty($_POST['csas-style']) || !empty( $_POST['csas-script'])){
    
    update_option( "csas-style", $_POST['csas-style'] );
    update_option( "csas-script", wp_unslash( $_POST['csas-script'] ));

    echo "<div class='notice notice-success is-dismissible'><p>".__("Your changes were successfully saved.😍","csas")."</p></div>";
};
$styleCode=get_option( "csas-style",'' );
$scriptCode=get_option( "csas-script",'' );
?>


<h1 class="csas-title"><?php echo __("custom codes", "csas"); ?></h1>

<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th class="csas-heading"><?php echo __("css code:", "csas"); ?></th>
                <td>
                    <label for="csas-style" class="csas-label">
                        <?php echo __("In this section you can add your own custom styles to your WordPress site.", "csas"); ?>
                    </label>
                    <textarea name="csas-style" id="csas-style" rows="15" class="large-text code"><?= $styleCode ?></textarea>
                </td>
            </tr>
            <tr>
                <th><?php echo __("javascripts code:", "csas"); ?></th>
                <td class="csas-heading">
                    <label for="csas-script" class="csas-label">
                        <?php echo __("In this section you can add your custom scripts to your WordPress site.", "csas"); ?>
                    </label>
                    <textarea name="csas-script" id="csas-script" rows="15" class="large-text code"><?= $scriptCode ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="button button-primary" value="<?php echo __("save changes", "csas"); ?>">
</form>
