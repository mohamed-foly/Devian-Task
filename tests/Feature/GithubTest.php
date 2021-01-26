<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\Github;

class GithubTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSearch()
    {
        $github = new Github();
        $result = $github->search('2010-01-01','desc',3);
        $this->assertCount(3, $result->items);
    }
}
