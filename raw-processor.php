<?php
/**
Template Name: Processor
 * Created by PhpStorm.
 * User: aqkhan
 * Date: 11/10/2016
 * Time: 12:43 AM
 * RAW Processor file. Handles PHP Calls
 */
$redirects = array(
    'pUploader' => ''
);
if (isset($_POST['aqk-action']) && !empty($_POST['aqk-action'])) {
    $red = $_POST['aqk-action'];
    unset($_POST['aqk-action']);
    if ($red == 'pUploader') {
        require_once ('includes/project-uploader-storage.php');
    }
    wp_redirect(home_url() . $redirects[$red]);
}
else {
    wp_die('No non-sense please!');
}