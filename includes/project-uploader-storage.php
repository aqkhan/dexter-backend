<?php
loadWordPress();

// Assuming that the data from the front-end is perfect. Bad practice but I am playing dirty tonight.

$pArgs = array(
    'post_title' => $_POST['pName'],
    'post_content' => $_POST['pDescription'],
    'post_status' => 'publish',
    'post_type' => 'projects',
    'comment_status' => 'closed',
    'ping_status' => 'ping_status',
    'post_author' => get_current_user_id()
);
$p = wp_insert_post($pArgs);
if (!is_wp_error($p)) {
    update_post_meta($p, 'pLink', $_POST['pLink']);
    update_post_meta($p, 'pType', $_POST['pType']);
    $tags = $_POST['pTags'];
    if (is_array($_POST['pTags'])) {
        $tags = implode(',', $tags);
    }
    update_post_meta($p, 'pTags', $tags);
    update_post_meta($p, 'pThumb', $_POST['pThumb']);
    update_post_meta($p, 'pLogo', $_POST['pLogo']);

}
else {
    wp_die($p->get_error_message());
}