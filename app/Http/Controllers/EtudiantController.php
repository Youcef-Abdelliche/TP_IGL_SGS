<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function ajoutEtud(Request $request)
    {
        $etudiant = new Etudiant;
        Etudiant::insert([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'datenaissance' => $request['datenaissance'],
            'email' => $request['email'],
            'anneeuniv' => $request['anneeuniv'],
        ]);

        return \response([
            'data'=>'vous avez ajouté un etudiant'
        ]);
    }
}
