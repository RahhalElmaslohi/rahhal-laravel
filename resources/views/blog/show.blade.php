@extends('layouts.app')
@section('title', 'Détaile')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 pt-2">
            <a href="{{ route('blog.index') }}" class="main-button icon-button">Retouner à la liste d'étudients</a>
        </div>
    </div>
    <br>
    <table class="table">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom étudient</th>
            <th scope="col">Email</th>
            <th scope="col">Adresse</th>
            <th scope="col">N° Téléphone</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        <tr>
            <td  scope="row">{{ $etudient->id }}</td>
            <td>{{ $etudient->nom }}</td>
            <td>{{ $etudient->email }}</td>
            <td>{{ $etudient->adresse}}</td>
            <td>{{ $etudient->phone }}</td>
            <td>{{ $etudient->naissance }}</td>
            <td><a href="{{ route('blog.edit', $etudient->id)}}">Edit</a></td>
            <td>
            <form action="{{ route('blog.edit', $etudient->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
           </form>
            </td>
        </tr>
    </table>
</div>

<!-- Modal -->


@endsection
