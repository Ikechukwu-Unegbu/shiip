<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\MovieRepository;
use Illuminate\Http\Request;
use App\Repository\MovieRepositoryInterface;

class PageController extends Controller
{

    private $movieRepostory;
    public function home(MovieRepositoryInterface $movieRepository){
        $this->movieRepostory = $movieRepository;
        $movies = $this->movieRepostory->all();
        //var_dump($movies);
        return view('pages.home.index')->with('movies', $movies);
    }
}
