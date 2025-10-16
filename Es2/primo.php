<?php
    require_once ("./secondo.php");
    if(isset($_GET["nome"]) && !empty(trim($_GET["nome"]))){
        $nome = trim($_GET["nome"]);
        if(isset($_GET["sesso"]) && !empty(trim($_GET["sesso"]) && $_GET["sesso"]=='uomo' || $_GET["sesso"]=='donna')){
            $sesso=$_GET["sesso"];
            if(isset($_GET["datnasc"]) && !empty(trim($_GET["datnasc"]))){
                $data=$_GET["datnasc"];
                if(isset($_GET["auto"]) && !empty(trim($_GET["auto"])) && $_GET["auto"]=='audi' || $_GET["auto"]=='bmw' || $_GET["auto"]=='DR' || $_GET["auto"]=='Dacia'){
                    $auto=$_GET["auto"];
                    if(isset($_GET["hobby"]) && is_array($_GET["hobby"])){
                        $hobby = $_GET["hobby"];
                        $Oggetto= new Oggetto ($nome, $sesso, $data, $hobby);
                        echo $Oggetto->__toString();
                    
                    } else{
                        echo "Dato Mancante: Hobby";
                    }
                } else{
                    echo "Dato Mancante: Auto";
                }
            } else{
                echo "Dato Mancante: Data di nascita";
            }
        } else{
            echo "Dato Mancante: Sesso";
        }
    } else{
        echo "Dato Mancante: Nome";
    }
?>