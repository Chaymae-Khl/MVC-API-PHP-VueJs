<?php
include_once ROOT . 'models/Model.php';
include_once ROOT . 'models/etudiant.php';
class etudiants extends controller
{
    public function __construct()
    {

        parent::__construct('etudiant');
    }
    public function index()
    {
        echo json_encode(etudiant::All());
    }
    public function show($id)
    {
        echo json_encode(etudiant::find($id));

    }
    public function destroy($id)
    {
        $p = new etudiant();
        $p->id = $id;
        echo json_encode( $p->delete());
        $this->Redirect("../../etudiants");
    }
    public function store($request)
    {   
        $request=json_decode(file_get_contents("php://input"));
        $p = new etudiant();
        // $p->id=$request->id;
        $p->nom = $request->nom;
        $p->prenom = $request->prenom;
        $p->specialite = $request->specialite;
        echo json_encode($p->save());
        $this->Redirect("../etudiants");
    }
    
    public function update($id, $request)
    {
        $request=json_decode(file_get_contents("php://input"));
        $p = new etudiant();
        $p->id = $request->id;
        $p->nom = $request->nom;
        $p->prenom = $request->prenom;
        $p->specialite = $request->specialite;
        echo json_encode($p->save());
        $this->Redirect("../../etudiants");
    }
    
}
