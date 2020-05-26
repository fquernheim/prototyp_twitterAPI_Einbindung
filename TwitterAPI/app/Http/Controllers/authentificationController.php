<?php
namespace App\Http\Controllers;

$api_key = env('API_KEY');
$api_key_secret = env('API_KEY_SECRET');



use Illuminate\Http\Request;

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


class authentificationController extends Controller
{
    //
}
