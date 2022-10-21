@extends('layouts.app')

@section('navbar_button')
    <a class="btn btn-success" href="post/create" role="button">
        Создать пост
    </a>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <br>
                    @foreach($posts as $post)

                        <a class="link-dark text-decoration-none text-uppercase " href="post/{{$post->id}}" role="button"><h1>{{ $post->title }}</h1></a>
                        <p class="text-dark"> За авторством {{$post->author}}, опубликовано {{ date('d-m-Y', strtotime($post->created_at)) }}</p>

                        <br>

                    @endforeach



            </div>
            <div class="position-fixed bottom-0">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
