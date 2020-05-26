<?php
namespace App\Http\Controllers;

$api_key = env('API_KEY');
$api_key_secret = env('API_KEY_SECRET');
$access_token = env('ACCESS_TOKEN');
$access_token_secret = ('ACCESS_TOKEN_SECRET');

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Http\Request;


$connection = new TwitterOAuth($api_key, $api_key_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");



class authentificationController extends Controller
{
    //
}
