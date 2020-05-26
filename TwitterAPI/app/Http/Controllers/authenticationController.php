<?php
namespace App\Http\Controllers;

$api_key = env('API_KEY');
$api_key_secret = env('API_KEY_SECRET');
$access_token = env('ACCESS_TOKEN');
$access_token_secret = ('ACCESS_TOKEN_SECRET');

//require "TwitterAPI/vendor/twitteroauth/autoload.php";

use Illuminate\Http\Request;
//use App\Http\Requests;
use Abraham\TwitterOAuth\TwitterOAuth;
//use Log;
//use App\Models\TwitterTokens;



$connection = new TwitterOAuth($api_key, $api_key_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$statues = $connection->post("statuses/update", ["status" => "Hallo Welt!"]);



class authenticationController extends Controller
{
    public function login()
    {

        //$trends=Twitter::get(‘https://api.twitter.com/1.1/trends/place.json?id=1’);
    }

    public function callback(){

    }

}
