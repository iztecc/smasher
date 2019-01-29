<?php
// Load XML file
$xml = new DOMDocument;
$xml->load('data/formdata.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('data/formdataxsl.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>