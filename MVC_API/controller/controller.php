<?php 

abstract class controller{
public function __construct(string $model){


}
public function view(string $fichier, $data=null){
 // include_once ROOT."views/".get_class($this)."/$fichier.php";



}


public function Redirect($chemin)
{
     header('Location:'.$chemin);

}
}   
?>