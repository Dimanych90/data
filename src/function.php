<?php

$dataXml = file_get_contents('data.xml');

$xml = new SimpleXMLElement($dataXml);

echo $xml->asXML();
echo '<hr><br>';

foreach ($xml->Address as $address) {
    echo '<br>' . $address->Name->__toString() . '<br>' . '<br>';
    echo 'Type: ' . $address->attributes()->Type . ' ,';
    echo $address->Street->__toString() . '<br>';
    echo $address->City->__toString() . '<br>';
    echo $address->State->__toString() . '<br>';
    echo $address->Zip->__toString() . '<br>';
    echo $address->Country->__toString() . '<br>';
    echo $xml->DeliveryNotes->__toString() . '<br>';

}




