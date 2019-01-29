<?php
if (isset($_REQUEST['ok'])) {
    $xml = new DOMDocument("1.0", "UTF-8");
    $xml->load("data/formdata.xml");

    $rootTag = $xml->getElementsByTagName("information")->item(0);

    $dataTag = $xml->createElement("form");

    $timeTag = $xml->createElement("time", date("Y-m-d h:i:sa"));

    $aTag = $xml->createElement("firstname", $_REQUEST['firstname']);
    $bTag = $xml->createElement("lastname", $_REQUEST['lastname']);
    $cTag = $xml->createElement("gender", $_REQUEST['gender']);
    $dTag = $xml->createElement("specialty", $_REQUEST['specialty']);
    $eTag = $xml->createElement("institution", $_REQUEST['institution']);
    $fTag = $xml->createElement("country", $_REQUEST['country']);
    $gTag = $xml->createElement("phone", $_REQUEST['phone']);
    $hTag = $xml->createElement("email", $_REQUEST['email']);
    $iTag = $xml->createElement("user", $_REQUEST['user']);
    $jTag = $xml->createElement("specify", $_REQUEST['specify']);

    $dataTag->appendChild($timeTag);

    if ($_REQUEST['firstname'] != "") $dataTag->appendChild($aTag);
    if ($_REQUEST['lastname'] != "") $dataTag->appendChild($bTag);
    if ($_REQUEST['gender'] != "") $dataTag->appendChild($cTag);
    if ($_REQUEST['specialty'] != "") $dataTag->appendChild($dTag);
    if ($_REQUEST['institution'] != "") $dataTag->appendChild($eTag);
    if ($_REQUEST['country'] != "") $dataTag->appendChild($fTag);
    if ($_REQUEST['phone'] != "") $dataTag->appendChild($gTag);
    if ($_REQUEST['email'] != "") $dataTag->appendChild($hTag);
    if ($_REQUEST['user'] != "") $dataTag->appendChild($iTag);
    if ($_REQUEST['specify'] != "") $dataTag->appendChild($jTag);

    $rootTag->appendChild($dataTag);

    $xml->save("data/formdata.xml");

    header("Location:select.html");

}
?>