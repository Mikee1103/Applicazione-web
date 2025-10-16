<?php
class Oggetto {
    public String $nome;
    public String $sesso;
    public String $data;
    public String $auto;
    public array $hobby;

    function __construct($nome,$sesso,$data,$auto,$hobby) {
        $this->nome = $nome;
        $this->sesso = $sesso;
        $this->data = $data;
        $this->auto = $auto;
        $this->hobby = $hobby;
    }

    public function __toString() {
        $s= "nome: " . $this->$nome. ", sesso: " . $this->$sesso. ",data: " . $this->$data. ", auto: " . $this->$auto. ", hobby: " . $this->$hobby. "<br>";
        foreach($this->hobby as $v){
            $s=$s. "hobby: ".$v. " ";
        }
        return $s;
    }   

    function set_nome ($nome){
        $this->nome=$nome;
    }
    function get_name ($nome){
        return $this->nome;
    }
    function set_sesso ($sesso){
        $this->sesso=$sesso;
    }
    function get_sesso ($sesso){
        return $this->sesso;
    }
    function set_data ($data){
        $this->data=$data;
    }
    function get_data ($data){
        return $this->data;
    }
    function set_auto ($auto){
        $this->auto=$auto;
    }
    function get_auto ($auto){
        return $this->auto;
    }
    function set_hobby ($hobby){
        $this->hobby=$hobby;
    }
    function get_hobby ($hobby){
        return $this->hobby;
    }
}
?>