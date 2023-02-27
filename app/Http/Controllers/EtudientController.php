<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\Etudient;

use Illuminate\Http\Request;

class EtudientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudients = Etudient::all();
        return view('blog.index', ['etudients'=>$etudients]);
    }

    public function welcome(){
        // return view('hello', ['name'=> 'Peter']);
        return view('welcome');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEtudient = Etudient::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'phone' => $request->phone,
            'adresse' => $request->adresse,
            'naissance' => $request->naissance,
            'villeId' => 1
        ]);

        return redirect(route('blog.show', $newEtudient->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function show(Etudient $etudient)
    {
        return view('blog.show', ['etudient' => $etudient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudient $etudient)
    {
        return view('blog.edit', ['etudient' => $etudient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudient $etudient)
    {
        $etudient->update([
            'nom' => $request->nom,
            'phone' => $request->phone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'naissance' => $request->naissance
        ]);

        return redirect(route('blog.show', $etudient->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudient  $etudient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudient $etudient)
    {
        $etudient->delete();

        return redirect(route('blog.index'));
    }
}
