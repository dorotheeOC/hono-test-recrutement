<?php

function shortcode_social(){
    $socialMedias = array (
        'Facebook' => 'https://facebook.com',
        'Instagram.com' => 'https://instagram.com',
        'Linkedin' => 'https://www.linkedin.com',
        'GitHub' => 'https://github.com/honoagency');

    foreach($socialMedias as $name => $link)
    {
        return '<ul><li>' . $name . ': <a href="' . $link . '">' . $link . '</a></li></ul>';
    }
}

add_shortcode('show_social_network', 'shortcode_social');

?>
