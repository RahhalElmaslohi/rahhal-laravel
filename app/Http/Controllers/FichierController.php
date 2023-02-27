<?php

namespace App\Http\Controllers;

use App\Models\Fichier;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreFileRequest;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichiers = Fichier::all();
        return view('fichier.index', ['fichiers'=>$fichiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichier.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $fichier = $request->file->getClientOriginalName();
      $request->file->move(public_path("public/file/"), $fichier);


        $newFichier = Fichier::create([
            'title' => $request->title,
            'path' => "public/file/".$request->title,
            'etudients_id' => Auth::user()->id

        ]);

        return redirect(route('fichier.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function show(Fichier $fichier)
    {
        return view('fichier.show', ['fichier' => $fichier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function edit(Fichier $fichier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fichier $fichier)
    {
        $fichier->update([
            'titre' => $request->titre,
            'titre_fr' => $request->titre_fr,
            'path' => $request->path

        ]);

        return redirect(route('fichier.show', $fichier->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fichier  $fichier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fichier $fichier)
    {
        $fichier->delete();

        return redirect(route('fichier.index'));
    }
}
