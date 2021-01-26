<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GithubSearchRequest;
use App\Services\Github;

class GithubController extends Controller
{
    public function search(GithubSearchRequest $request){
        $github = new Github();
        if ($request->programming_language) $github = $github->setProgrammingLanguage($request->programming_language);
        
        $data = $github->search($request->date, $request->order_way, $request->per_page);
        return response()->json([
            'success'=>true, 
            'data'=>$data->items, 
            'total'=>$data->total_count, 
            'per_page'=>$request->per_page??10, 
            'page'=>$request->page??1
            ]);
    }
}
