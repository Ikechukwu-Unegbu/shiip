<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\MovieRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Repository\LocationRepositoryInterface;
use Illuminate\Support\Facades\Session;
class MoviesController extends Controller
{

    private $movieRepository;
    private $locationRepository;
   

    public function __construct(MovieRepositoryInterface $movieRepository){
        $this->movieRepository = $movieRepository;
    }

    public function create(LocationRepositoryInterface $locationRepository){

        $this->locationRepository = $locationRepository;
        $locations = $this->locationRepository->all();
        
        return view('pages.movies.create')->with('locations', $locations);
    }

    public function store(Request $request){
        // I AM JUMPING FIELD VALIDATION AND PURIFICATION STEP HERE.
        $id = Auth()->user()->id;
        $payload = [
            'name'=>$request->title, 
            'descript'=>$request->description,
            'poster'=>$request->poster,
            'showtime'=>$request->showtime,
            'location'=>$request->location,
            'userid'=>$id
        ];
       
        // var_dump($payload);die;
        $this->movieRepository->create($payload);
        Session::flash('success', "New movie Created");
        return redirect()->route('new_movie');
    }
}
