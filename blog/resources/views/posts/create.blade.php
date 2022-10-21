@extends('layouts.app')

@section('content')



    <div class="container">

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Создать пост') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/post" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Заголовок поста</label>
                                <input type="text" name="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Текст поста</label>
                                <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="">Автор поста</label>
                                <input type="text" name="author" class="form-control">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
