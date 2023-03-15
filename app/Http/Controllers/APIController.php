<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use App\Models\FICHA;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class APIController extends Controller
{

    public Function cep() {

        $userCount  =  FICHA::where('status_id', '=', auth()->id())
        ->count();
        $search = request('search');
        $response = Http::get('https://brasilapi.com.br/api/cep/v2/' . $search);

   //     dd($response);

        $data = json_decode($response); // convert JSON into objects 

     //   dd($data);
  return view('API.CEP/index', ['search' => $search, 
                                'data' =>$data,
                                'userCount' => $userCount                
                        ]);

          //dd($search);

  }
    public Function cnpj() {

        $userCount  =  FICHA::where('status_id', '=', auth()->id())
        ->count();
        $search = request('search');
        $response = Http::get('https://brasilapi.com.br/api/cnpj/v1/' . $search);

   //     dd($response);

        $data = json_decode($response); // convert JSON into objects 

     //   dd($data);
  return view('API.CNPJ/index', ['search' => $search,
                                 'data' =>$data,
                                 'userCount' => $userCount
                                ]);

          //dd($search);

  }

public Function filmes(){
   $userCount  =  FICHA::where('status_id', '=', auth()->id())
        ->count();
        $search = request('search');
        $response = Http::get('https://api.themoviedb.org/3/movie/550?api_key=6c0f0d37611cda7851f7c2e5b044ec10' . $search);


        return view('API.CNPJ/index', ['search' => $search,
        'data' =>$data,
        'userCount' => $userCount
       ]);

}

}
