@extends('layouts.app')
@section('title', 'forum List')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one">
                    @lang('lang.my_forum')
                </h1>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            @lang('lang.reading_title')
                        </p>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ route('forum.create')}}" class="btn btn-outline-primary">
                            @lang('lang.add_post')
                        </a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des articles
                        </div>
                        <div class="card-body">
                            
                            <ul>
                                @forelse($forums as $forum)
                                        <li><a href="{{ route('forum.show', $forum->id)}}">{{ $forum->title }}</a></li>
                                @empty
                                        <li class="text-danger">Aucun article de forum disponible</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
