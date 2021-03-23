@extends('layouts.main')

@section('content')
    <h2 class="post-title">Привет</h2><br>
    <p class="post-meta">Здесь Вы можете заказать интересующую Вас информацию</p>

    <div class="container-fluid">

        <!-- Content Row -->
        <div>
            <form action="{{ route('news.order_news.store') }}" method="POST">
                @csrf
                <div class="col-8">
                    <div class="form-group">
                        <label for="category">Выбор категории</label>
                        <select class="form-control" name="category_id" id="category">
                            <option>Выбрать</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Ваше имя</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Ваш емайл</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Желаемый ресурс</label>
                        <input type="text" class="form-control" name="discription">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>
            </form>
        </div>


    </div>
@endsection
