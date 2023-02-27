@extends('layouts.app')
@section('title', 'List des étudients')
@section('content')
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des étudients
                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="card-body justify-content-center">
                            <ul>
                                <table class="table table-bordered table-striped table-responsive table-hover">
                                    <tr>
                                        <th scope="col">Numéro</th>
                                        <th scope="col">Nom étudient</th>
                                        <th scope="col">Show</th>
                                        <th scope="col">Update</th>
                                        <th scope="col">Delete</th>
                                    </tr>

                                    @forelse($etudients as $etudient)
                                    <tr>
                                        <td  scope="row">{{ $etudient->id }}</td>
                                        <td>{{ $etudient->nom }}</td>
                                        <td><a href="{{ route('blog.show', $etudient->id)}}" class="btn btn-info">Show</a></td>
                                        <td><a href="{{ route('blog.edit', $etudient->id)}}" class="btn btn-warning" >Edit</a></td>
                                        <td>
                                            <div class="col-6">
                                            <form action="{{ route('blog.edit', $etudient->id)}}" method="post">
                                                 @csrf
                                                 @method('delete')
                                             <input type="submit" class="btn btn-danger" value="Effacer">
                                            </form>
                                            </div>
                                        </td>
                                        @empty
                                                <li class="text-danger">Aucun étudient disponible</li>
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
        <form action="{{ route('blog.edit', $etudient->id)}}" method="post">
                @csrf
                @method('delete')
            <input type="submit" class="btn btn-danger" value="Effacer">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
