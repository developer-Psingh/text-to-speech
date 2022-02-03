
<?php
require_once('config.php');
if(isset($_GET['get_audio'])){
$text_data=$_GET['get_audio'];
$tts = new VoiceRSS;
$voice = $tts->speech([
    'key' => '3e372f43d79545e18526bcd12ef9ecb6',
    'hl' => 'hi-in',
    'v' => 'Linda',
    'src' => $text_data,
    'r' => '0',
    'c' => 'mp3',
    'f' => '44khz_16bit_stereo',
    'ssml' => 'false',
    'b64' => 'true'
]);

 $player="<audio controls='controls'><source src='".$voice['response']."'></audio>";
  echo $player;
}
?>

