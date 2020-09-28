<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projet;

class ProjetController extends Controller
{
   
   public function index(){

   		$LstPr = \DB::table('projets')
                     ->select('*')
                     ->where('Id_user', '=', \Auth::user()->id)
                     ->get();
   		return view('projets.index',['Prjs' => $LstPr]);
   }


   public function indexAll(){

   		$LstPrj = \DB::table('projets') 
		            ->join('users', 'projets.Id_user', '=', 'users.id')
		            ->select('projets.Nom', 'users.name', 'projets.Description', 'projets.language', 'projets.Date')
		            ->get();
   		return view('projets.AllProjets',['Prjs' => $LstPrj]);
   }

   public function create(){
   		return view('projets.create');
   }

   public function store(Request $request){
   		
   		$prjt = new Projet();

   		$prjt->Nom = $request->input('nomP');
   		$prjt->Description = $request->input('descP');
   		$prjt->language = $request->input('langP');
   		$prjt->Id_user = \Auth::user()->id;
   		$prjt->Date = $request->input('dateP');

   		$prjt->save();
   		return redirect('projets');
   }

   public function edit($id){
   		$LPrj = Projet::find($id);
   		return view('projets.edit',['prj' => $LPrj]);
   }

   public function update(Request $request, $id){
   		$prjt = Projet::find($id);

   		$prjt->Nom = $request->input('nomP');
   		$prjt->Description = $request->input('descP');
   		$prjt->language = $request->input('langP');
   		$prjt->Date = $request->input('dateP');

   		$prjt->save();
   		return redirect('projets');
   }

   public function destroy(Request $request, $id){
   		
   		$prj = Projet::find($id);
   		$prj->delete();
   		return redirect('projets');

   }
}
