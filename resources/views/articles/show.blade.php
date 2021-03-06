@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ $article->title }}</h2>
                    </div>
                    <div class="panel-body">
                    <article>
                        {{ $article->body }}
                    </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection