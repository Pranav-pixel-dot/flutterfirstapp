<?php
$api_key= '<YOUR API KEY>'; 
$text = "I love you";  
$languages = array('en','hi','fr'); //add as many languages as you want 
for($i=0;$i<count($languages);$i++) 
{ 
echo  $i.".".translate($api_key,'en',$languages[$i],$text)."<BR>"; 
}  
function translate($api_key,$from_lan, $to_lan, $text) 
{ 
		$url = 'https://www.googleapis.com/language/translate/v2?key=' . $api_key . '&q=' . rawurlencode($text); 
$url .= '&target='.$to_lan; 
$url .= '&source='.$from_lan; 
  
$response = file_get_contents($url); 
$obj =json_decode($response,true);  
if($obj != null) 
{ 
    if(isset($obj['error'])) 
    { 
        echo "Error is : ".$obj['error']['message']; die(); 
    } 
    else 
    { 
        return $obj['data']['translations'][0]['translatedText']; 
    } 
} 
	 
}