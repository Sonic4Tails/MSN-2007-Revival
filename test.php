<?php
$html = "";
$url = "https://news.google.com/rss/search?q=Shopping+News?hl%3Den-US&gl=US&ceid=US:en&hl=en-US";
$xml = simplexml_load_file($url);
for($i = 0; $i < 4; $i++){
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;

    $html .= '<p>';
    $html .= "<a href="$link">$title</a>";
    $html .= "</p>";
}
echo $html;
?>