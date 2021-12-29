<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Repository\LocationRepositoryInterface;
use Illuminate\Support\Facades\Session;

class LocationController extends Controller
{
    private $locationRepository;

    public function __construct(LocationRepositoryInterface $locationRepository){
        $this->locationRepository = $locationRepository;
    }

    public function create(){
        return view('pages.location.create');
    }

    public function store(Request $request){
        
        $id = Auth()->user()->id;
        $payload = [
            'name'=>$request->name, 
            'addrss'=>$request->address
        ];
       
        // var_dump($payload);die;
        $this->locationRepository->create($payload);
        Session::flash('success', "New Location Created");
        return redirect()->route('new_location');

    }
}
