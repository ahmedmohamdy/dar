<?php
    function gettitle ()
    {
        global $pagetitle;

        if (isset($pagetitle)) {
            echo $pagetitle;
        } else {
            echo 'Default';
        }
    }
    
    function getReco($table){
        global $con;

        $getReco = $con->prepare("SELECT * FROM $table ");
        $getReco->execute();
        $infos = $getReco->fetchAll();

        return $infos;
    }
