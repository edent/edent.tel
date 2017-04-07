<?php
// https://en.wikipedia.org/wiki/VCard

header('Content-Type: text/vcard;charset=utf-8;');
header('Content-Disposition: inline; filename="edent.vcf"');
header("Pragma: no-cache");

$vcard = "BEGIN:VCARD
VERSION:3.0
N:Eden;Terence;;Mr.;
FN:Terence Eden
TEL;TYPE=HOME,VOICE:+447717512963
EMAIL:contact@shkspr.mobi
END:VCARD";

echo $vcard;

die();
