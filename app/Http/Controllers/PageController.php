<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\MovieRepository;
use Illuminate\Http\Request;
use App\Repository\MovieRepositoryInterface;

class PageController extends Controller
{

    private $movieRepostory;
    public function home(MovieRepositoryInterface $movieRepository){
        return view('pages.home.index');
    }

    public function contactpage(){
        return view('pages.contactus.index');
    }
}
