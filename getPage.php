<?php

$page_raw = $_POST['page'];
$latest_post = $_POST['latest_post'];
$access_token = $_POST['access_token'];

$url = "https://graph.facebook.com/debug_token?input_token=" . $access_token . "&access_token=1044556435641796|fd8d53abaa807f91a39a772c32c55df9";

// Check if user is allowed to access facebook app

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

// Set so curl_exec returns the result instead of outputting it.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Get the response and close the channel.
$response = curl_exec($ch);
curl_close($ch);

if (json_decode($response, true)['data']['is_valid'] == '1'){

	file_put_contents("latest_post", $latest_post);

	$newspage = file_get_contents("news.php");

	$newspage = preg_replace('/<!--insert_news_here-->/', '<!--insert_news_here-->' . $page_raw, $newspage); 
	$newspage = str_replace('<img src="http://oldkry.newfire.rocks/menu/side-items/img/icons/icon_x.png" align="right" height="15px">', '', $newspage); 


	file_put_contents("news.php", $newspage);
	echo "erfolgreich übertragen" . json_decode($response, true)['data']['is_valid'];

} else {	
	echo 'Zugriff verweigert!';
}

?>
