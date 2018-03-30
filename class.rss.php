<?php
$url = "http://www.detroitlions.com/cda-web/rss-module.htm?tagName=News";
$xml = simplexml_load_file($url);
$i = 0;
foreach($xml->channel->item as $NewsHeader){
echo '<a href="'.$NewsHeader->link.'">';
echo '<strong>'.$NewsHeader->title.'</strong>';
echo'</a>';
echo'<br>'.$NewsHeader->description.'<br>';
}
?>
