<?php
include_once ROOT . 'models/Model.php';
include_once ROOT . 'models/prof.php';
class profs extends controller
{
    public function __construct()
    {
        parent::__construct('prof');
    }
   
   
    public function index()
    {
        echo json_encode(prof::All());
        // parent::view("index", prof::All());
    }
    
    
    public function show($id)
    {
        // $this->view("form", prof::find($id));
        echo json_encode(prof::find($id));
    }
   
   
    public function destroy($id)
    {
        $p = new prof();
        $p->id = $id;
       // $p->delete();
       echo json_encode($p->delete());
        $this->Redirect("../../profs");
    }
    
    
    public function store($request)
    {   
        $request=json_decode(file_get_contents("php://input"));
        $p = new prof();
        // $p->id=$request->id;
        $p->nom = $request->nom;
        $p->prenom = $request->prenom;
        $p->specialite = $request->specialite;
        // $p->save();
        echo json_encode($p->save());
    
        $this->Redirect("../profs");
    }
    

    
    public function update($id, $request)
    {   $request=json_decode(file_get_contents("php://input"));
        $p = new prof();
        $p->id = $request->id;
        $p->nom = $request->nom;
        $p->prenom = $request->prenom;
        $p->specialite = $request->specialite;
        // $p->save();
        echo json_encode($p->save());
        $this->Redirect("../../profs");
    }
    
}
