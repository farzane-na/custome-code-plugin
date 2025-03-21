<?php
if(!empty($_POST['csas-style']) || !empty( $_POST['csas-script'])){
    
    update_option( "csas-style", $_POST['csas-style'] );
    update_option( "csas-script", wp_unslash( $_POST['csas-script'] ));

    echo "<div class='notice notice-success is-dismissible'><p>تغییرات شما با موفقیت ذخیره شد.😍</p></div>";
};
$styleCode=get_option( "csas-style",'' );
$scriptCode=get_option( "csas-script",'' );
?>


<h1 class="csas-title">کدهای سفارشی</h1>
<form action="" method="post">
    <table class="form-table">
        <tbody>
            <tr>
                <th class="csas-heading">کدهای css:</th>
                <td>
                    <label for="csas-style" class="csas-label">در این بخش شما می‌توانید استایل‌های سفارشی خود را به سایت وردپرسی خود اضافه کنید.</label>
                    <textarea name="csas-style" id="csas-style" rows="15" class="large-text code"><?= $styleCode ?></textarea>
                </td>
            </tr>
            <tr>
                <th>کدهای js:</th>
                <td class="csas-heading">
                    <label for="csas-script" class="csas-label">در این بخش شما می‌توانید اسکریپت‌های سفارشی خود را به سایت وردپرسی خود اضافه کنید.</label>
                    <textarea name="csas-script" id="csas-script" rows="15" class="large-text code"><?= $scriptCode ?></textarea>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="button button-primary" value="ذخیره تغییرات">
</form>