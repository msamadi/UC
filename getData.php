<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("files/data.xml");

$x = $xmlDoc->getElementsByTagName('plan');
$k = 1;
for($i = 0; $i < $x->length; $i++){
    if($x->item($i)->nodeType == 1){
        echo '<li class="similars"><div class="lasnum">' . $k++ . '</div><h2>' . $x->item($i)->childNodes->item(1)->nodeValue .'</h2><ul>';
        for($j = 3; $j < $x->item($i)->childNodes->length; $j = $j + 2){
            echo '<p>' . $x->item($i)->childNodes->item($j)->childNodes->item(1)->nodeValue . '</p>';
            echo '<li><div class="comment more">' . $x->item($i)->childNodes->item($j)->childNodes->item(3)->nodeValue . '</div></li>';
        }
        echo "</ul></li>";
    }
}
?>