#!/bin/bash

$adresseSite=$1
$nom_fichier=$2
export DISPLAY=:0

firefox -print $adresseSite -printmode pdf -printfile ~/$nom_fichier