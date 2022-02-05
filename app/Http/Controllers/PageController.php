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

    public function portfolio(){
        return view('pages.portfolio.index');
    }

    public function blogPage(){
        return view('pages.blog.index');
    }
}
