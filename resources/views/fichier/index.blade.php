@extends('layouts.app')
@section('title', 'List des fichiers')
@section('content')
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des fichier
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="card-body justify-content-center">
                            <ul>
                                <table class="table table-bordered table-striped table-responsive table-hover">
                                    <tr>
                                        <th scope="col">Numéro</th>
                                        <th scope="col">Nom fichier</th>
                                        <th scope="col">Show</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>

                                    @forelse($fichiers as $fichier)
                                    <tr>
                                        <td  scope="row">{{ $fichier->id }}</td>
                                        <td>{{ $fichier->title }}</td>
                                        <td><a href="{{ route('fichier.create')}}" class="btn btn-info">Add files</a></td>
                                        <td><a href="" class="btn btn-warning" >Edit</a></td>
                                        <td>
                                            <div class="col-6">
                                            <form action="" method="post">
                                                 @csrf
                                                 @method('delete')
                                             <input type="submit" class="btn btn-danger" value="Effacer">
                                            </form>
                                            </div>
                                        </td>
                                        @empty
                                                <li class="text-danger">Aucun fichier disponible</li>
                                        @endforelse
                                    </tr>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>





<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Effacer un étudient</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous certain de vouloir effacer cette donnée?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
