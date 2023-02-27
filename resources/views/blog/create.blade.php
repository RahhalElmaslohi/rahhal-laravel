@extends('layouts.app')
@section('title', 'Ajouter étudient')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-2">
            <h1 class="display-one ">
                Ajouter un étudient
            </h1>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
            <form method="post">
                    @csrf
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <div class="control-group col-12">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="email">email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="phone">phone</label>
                            <input type="text" id="phone" name="phone" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="adresse">adresse</label>
                            <input type="text" id="adresse" name="adresse" class="form-control">
                        </div>
                        <div class="control-group col-12">
                            <label for="naissance">date de naissance</label>
                            <input type="text" id="naissance" name="naissance" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Ajouter" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
