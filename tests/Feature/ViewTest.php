<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_view()
    {
        $response = $this->get('/news/order_news');

        $response->assertStatus(200);
    }

    public function test_view_show()
    {
        $response = $this->get('/news/order_news/store');

        $response->assertStatus(200);
    }


}
