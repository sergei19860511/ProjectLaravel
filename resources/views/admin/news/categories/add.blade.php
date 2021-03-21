@extends('layouts.admin')
@section('content')
    <div class="container-fluid">


        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Добавить категорию</h1> &nbsp; <strong>
                <a href="{{ route('admin.categories.index') }}">Список категорий</a></strong>
        </div>

        <!-- Content Row -->
        <div>
            <form action="{{ route('admin.categories.store') }}" method="Post">
                @csrf
                <div class="col-6">
                <div class="form-group">
                    <label for="title">Название категории</label>
                    <input type="text" class="form-control" placeholder="title" name="title">
                </div>
                <div class="form-group">
                    <label for="title">Описание категории</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>


    </div>
@endsection
