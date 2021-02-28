@extends('layouts.main')

@section('title')
    {{ $news['title'] }} @parent
@endsection
@section('header')
    {{ $news['title'] }}
@endsection

@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {{ $news['text'] }}
                </div>
            </div>
        </div>
    </article>

    <br>
    <a href="#">В админку</a>
@endsection
