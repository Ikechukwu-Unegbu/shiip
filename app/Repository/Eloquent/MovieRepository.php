<?php 
namespace App\Repository\Eloquent;
//namespace App\Repository\Eloquent;

use App\Models\Movie;
use App\Repository\MovieRepositoryInterface;
use App\Repository\UserRepositoryInterface;

class MovieRepository extends BaseRepository implements MovieRepositoryInterface{
  protected $model;

  public function __construct(Movie $model){
    $this->model = $model;
  }
}