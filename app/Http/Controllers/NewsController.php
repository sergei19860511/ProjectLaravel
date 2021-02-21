<?php

namespace App\Http\Controllers;

use App\Services\FakeNews;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index(FakeNews $service)
    {
        return view('news.index', [
            'listNews' => $service->getNews()
        ]);
    }
    public function show(FakeNews $service, int $id)
    {
        $allNews = $service->getNews();
        $news =  $allNews[$id] ?? "Not found";
        return view('news.show', [
            'news' => $news
        ]);
    }
}
