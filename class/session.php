<?php 


class Session{


   public function __construct($nom,$prenom){

        session_start();
        $_SESSION['username']=$nom;
        $_SESSION['firstname']=$prenom;
    }


    public function getUsername(){
        return($_SESSION['username']);
    }

    public function getFirstname(){
        return($_SESSION['firstname']);
    }


    public function serializeObjet($objet){
        return serialize($objet);
    }

    public function deSerializeTxt($txtObjet){
        return unserialize($txtObjet);
    }


    public function __set($name, $value){ 
        echo("set <br>");
        $_SESSION[$name]=$value;
    } 


    public function __get($name){ 
        echo("get <br>");
        return($_SESSION[$name]);
      
    } 

   public function deconnection(){
      echo("deconnection <br>");
      session_destroy();
    }
    
}

?>