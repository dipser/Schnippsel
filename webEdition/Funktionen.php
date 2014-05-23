<?php

/**
 * webEdition standalone functions
 */


// webEdition Dokument Dateityp-Erkennung
$we_ContentType = getContentTypeFromFile($filename);


// Unique ID
weFile::getUniqueId()


// Dateinamen für webEdition anpassen
importFunctions::correctFilename($filename)


// IDs und Pfade ermitteln
// <we:url id="9" />
$path = id_to_path(9);

$id = path_to_id('/subdir');

$id = f('SELECT ID FROM '. FILE_TABLE .' WHERE Path="'. $GLOBALS['DB_WE']->escape($we_doc->Path) .'"', 'ID', $GLOBALS['DB_WE'])


// Print Array mit Formatierung
p_r($we_doc);


// <we:... />
we_tag( string $name , array $attribs [, string $content] );


//
$GLOBALS['we_doc']->setElement('Headline', 'Das ist ein Beispieltext.');
<we:input type="text" name="Headline"/>
$GLOBALS['we_doc']->getElement('Headline')


/**
 * - error_log2($variable) // Schreibt beliebige Variablen, Arrays und Objekte, auch verschachtelt, in die PHP-Error-Log-Datei. 
 * - removePHP( string $val )
 * - removeHTML($val)
 * - makeArrayFromCSV($csv)
 * - makeCSVFromArray($arr, $prePostKomma=false, $sep=",")
 */


?>