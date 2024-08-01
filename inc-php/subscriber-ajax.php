<?php

add_action('wp_ajax_subscriber_form_action', 'subscriber_form_action_callback');
add_action('wp_ajax_nopriv_subscriber_form_action', 'subscriber_form_action_callback');

function subscriber_form_action_callback() {
    check_ajax_referer('wp_subscriber', 'nonce');

    if (isset($_POST['ajax_data'])) {
        $all_form_data = $_POST['ajax_data'];
        $email = isset($all_form_data['email']) ? sanitize_email($all_form_data['email']) : '';

        $status = 'publish';
        $post_type_subscriber = 'subscriber' ;
    }  
    
    $subscriber_post_args = array(
        'post_title' => $email,
        'post_status' => $status,
        'post_type' => $post_type_subscriber,
    );

    $id_subscriber = wp_insert_post($subscriber_post_args);

    
    wp_send_json_success('User Subscribed');
    wp_send_json_error('Error ocurred!');

}