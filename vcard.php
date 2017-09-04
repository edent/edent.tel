<?php
// https://en.wikipedia.org/wiki/VCard

header('Content-Type: text/vcard;charset=utf-8;');
header('Content-Disposition: inline; filename="cserey.vcf"');
header("Pragma: no-cache");

$vcard = "BEGIN:VCARD
VERSION:3.0
N:Serey;Cristian;;Mr.;
FN:Cristian Serey
TEL;TYPE=HOME,VOICE:+56978914547
EMAIL:cristian.serey@gmail.com
END:VCARD";

echo $vcard;

die();
