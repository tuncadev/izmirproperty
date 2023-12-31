<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 08/01/16
 * Time: 4:23 PM
 */
$allowed_html_array = array(
    'i' => array(
        'class' => array()
    ),
    'span' => array(
        'class' => array()
    ),
    'a' => array(
        'href' => array(),
        'title' => array(),
        'target' => array(),
        'data-toggle' => array(),
        'data-target' => array(),
        'class' => array(),
    )
);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="property_login_required" class="login-required-block detail-block target-block">
                <div class="alert alert-info">
                    <?php
                    if( houzez_option('header_login') ) { 
                        echo '<span class="login-link">';
                        echo wp_kses(__( 'To view this listing please <a class="hhh_login" href="#" data-toggle="modal" data-target="#login-register-form">sign in</a>.', 'houzez-child' ), $allowed_html_array); 
                        echo '</span> ';
                    } else {
                        echo wp_kses(__( 'To view this listing please sign in.', 'houzez-child' ), $allowed_html_array); 
                    }

                    if( houzez_option('header_register') ) { 
                        echo '<span class="register-link">';
                        echo wp_kses(__( 'Don’t you have an account? <a class="hhh_regis" href="#" data-toggle="modal" data-target="#login-register-form">Register</a>', 'houzez-child' ), $allowed_html_array); 
                        echo '</span>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>