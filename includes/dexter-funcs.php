<?php
loadWordPress();

function getSingleProjectData($projectID) {
    $post = get_post($projectID);
    $projectDetails = array(
        'pName' => $post->post_title,
        'pDescription' => $post->post_content,
        'pLink' => get_post_meta($projectID, 'pLink', true),
        'pType' => get_post_meta($projectID, 'pType', true),
        'pTags' => get_post_meta($projectID, 'pTags', true),
        'pThumb' => get_post_meta($projectID, 'pThumb', true),
        'pLogo' => get_post_meta($projectID, 'pLogo', true),
        'cName' => get_post_meta($projectID, 'cName', true),
        'pRating' => get_post_meta($projectID, 'pRating', true),
        'pFeedback' => get_post_meta($projectID, 'pFeedback', true),
        'services' => get_post_meta($projectID, 'services', true),
        'pLocation' => get_post_meta($projectID, 'pLocation', true)
    );
    unset($post);
    return $projectDetails;
}

function getExistingProjectLinks() {
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'fields' => 'ids'
    );
    $projs = get_posts($args);
    $links = [];
    foreach ($projs as $p) {
        $i = get_post_meta($p, 'pLink', true);
        if (!empty($i) && $i !== '') {
            $links[] = $i;
        }
    }
    if (empty($links) || !is_array($links)) {
        $links = false;
    }
    return $links;
}

function checkExistingProjectLink ($link) {
    $allLinks = getExistingProjectLinks();
    if ($allLinks !== false) {
        if (in_array($link, $allLinks)) {
            return true;
        }
    }
    return false;
}