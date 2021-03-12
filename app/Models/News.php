<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getNews()
    {
        return \DB::table('news')
            ->get();
    }

    public function getFirstNews(int $id)
    {
        return \DB::table('news')->find($id);
    }
}
