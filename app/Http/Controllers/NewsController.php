<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $categoryNews = [
        'Проишествия', 'Авто', 'Спорт', 'Политика'
    ];

    protected $listNews = [
        ['Алтай' => 'На Алтае пожары',
        'Кража' => 'Крупная кража произошла в московском бутике',
        'Пробки' => 'Опять пробки в городе'],

        ['Веста' => 'Лада Веста подешивела',
        'Audi' => 'Ауди уходит с российского рынка',
        'Поло' => 'Вольсваген представил новый модельный ряд'],

        ['Хоккей' => 'Российские хокеисты взяли золото',
        'Футбол' => 'Российские футболисты выйграли чемпионат мира'],

        ['Доллор' => 'Доллор упал в цене',
        'Евро' => 'Евро также упал в цене',
        'Трамп' => 'Трамп подал в отставку']
    ];



    public function index()
    {
        return view('news.index', ['categoryNews' => $this->categoryNews]);
    }

    public function showCategoryNews(int $id, int $keyNews)
    {
        $keyNews = $this->listNews[$keyNews] ?? 'Not found';
        $news = $this->categoryNews[$id] ?? 'Not found';
        return view('news.showCategoryNews', ['news' => $news, 'keyNews' => $keyNews]);
    }

    public function showListNews(string $new)
    {
        $news = $new;
        return view('news.showListNews', ['news' => $news]);
    }
}
