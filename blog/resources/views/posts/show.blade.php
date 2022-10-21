@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Просмотр поста') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="text-uppercase"><h2>{{$post->title}}</h2></div>

                        <p>Автор - {{$post->author}}; дата публикации: {{date('d-m-Y', strtotime($post->created_at))}}</p>
                        <div>
                            {{$post->body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
