<?php
$file = new ZipArchive();
$file->open("file/" . $string . ".zip", ZipArchive::CREATE);
$file->addEmptyDir("texts/");
$file->addFile('/lang/' . $_POST['lang'] . '.lang', '/texts/' . $_POST['lang'] . '.lang');
$file->addFile($icon, 'pack_icon.png');
$file->addFromString( "/texts/languages.json" , "[ "$_POST['lang']" ]" );
$file->addFromString( "/texts/language_names.json" , "[ [ "$_POST['lang']", "$langname" ] ]" );
$file->addFromString( "manifest.json" , "");
$file->close();
?> 
