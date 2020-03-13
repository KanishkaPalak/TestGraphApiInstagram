<?php
    include 'defines.php';

    // load graph-sdk files
    require_once __DIR__ . 'src/Facebook/autoload.php';
$creds = array(
        'app_id' => '214792709896512',
        'app_secret' => '69523abde5ed3e1a00585251e19145b1',
        'default_graph_version' => 'v3.2',
        'persistent_data_handler' => 'session'
    );
 // create facebook object
    $facebook = new Facebook\Facebook( $creds );

    // helper
    $helper = $facebook->getRedirectLoginHelper();

    // oauth object
    $oAuth2Client = $facebook->getOAuth2Client();
    if ( isset( $_GET['code'] ) ) { // get access token
            } 
            else { // display login url
        $permissions = ['public_profile', 'instagram_basic', 'pages_show_list', 'instagram_manage_insights', 'instagram_manage_comments', 'manage_pages'];
        $loginUrl = $helper->getLoginUrl( FACEBOOK_REDIRECT_URI, $permissions );
    
        echo '<a href="' . $loginUrl . '">
            Login With Facebook
        </a>';
    }