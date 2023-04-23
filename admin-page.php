<?php
if(! defined('ABSPATH')){
    die();
}

$popup = array(
    'ipl',
    'diwali',
    'newyear',
    'xmas',
);

if( isset( $_POST['save_popup'] )){
    $popup_img = esc_sql( $_POST['popup-image'] );
    if(get_option('pop-up-image', -1) == -1){
        add_option('pop-up-image', $popup_img);
    }else{
        update_option('pop-up-image', $popup_img);
    }
};
?>

<div class="wrap">
    <h1 class="wp-heading-inline"><?php echo get_admin_page_title(); ?></h1>
    <h3>Select Popup to show</h3>
    <form action="options-general.php?page=pop-up-menu" method="post">
    <ul>
        <?php
            foreach($popup as $popup){
                echo 
                "<li>
                <input type='radio' name='popup-image' value='$popup' id='$popup' />
                <label for='$popup'>$popup</label>
                </li>";
            }
        ?>
        <li></li>
        <li></li>
    </ul>
    <input type="submit" value='Save' name="save_popup">
    </form>
</div>