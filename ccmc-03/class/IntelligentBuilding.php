<?php
require_once("Building.php");
require_once("Iintelligence.php");
class IntelligentBuilding extends Building implements Iintelligence{
    function isAutolocked(){
        $message = "オートロック完備ひています.";
        return $message;
    }
    function accesswifi() {
        $message = "撫線LAN常時接続できます。";
        return $message;
    }
    
}
?>