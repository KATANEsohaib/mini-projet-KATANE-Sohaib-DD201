<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
class MiniproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $h=DB::select('select * from produits ');
        return view('Produit',["modules"=>$h]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $formFields=$request->validate([
            'libPdt'=>'required|min:3',
            'prixVente'=>'required|max:200',
            'Qte'=>'required|max:2000',
            'description'=>'required',
            'type'=>'required',
            'image'=>'image|required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image')){
            $formFields['image']= $request->file('image')->store('images','public');
        }
        Produit::create([
            'libPdt'=>$formFields['libPdt'],
            'prixVente'=>$formFields['prixVente'],
            'Qte'=>$formFields['Qte'],
            'description'=>$formFields['description'],
            'type'=>$formFields['type'],
            'image'=>$formFields['image'],
        ]);

        return redirect()->route('afficher')->with('message','Product created successfully');
    }

    public function showAjouterForm()
{
    return view('ajouter');
}


public function showProduits()
{
    // Vérifiez si l'utilisateur est connecté
    if (Auth::check()) {
        // Utilisateur connecté, affichez la page Produit
        return view('produit');
    } else {
        // Utilisateur non connecté, redirigez vers la page de connexion
        return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
    }
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $produit = Produit::findOrFail($id); // Récupère le produit avec l'ID spécifié
    return view('sohaib', ['produit' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function showLoginForm()
    {
        return view('login'); // Assurez-vous que le nom de la vue correspond à votre fichier login.blade.php
    }
    // Gérer la soumission du formulaire de connexion
    public function login(Request $request)
    
    {
        $loge=$request->validate([

            'login' =>"required|min:5|max:30",
            //'type' =>"required",
            'password' => "required|min:5|max:30",
        ]);
       

       if (Auth::attempt($loge)) {

        return redirect()->route('afficher');
    }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $m=DB::delete('delete from produits where id=?' ,[$id]);
        return redirect('/afficher');
    }
}



