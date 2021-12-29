<?php 
namespace App\Repository\Eloquent;

use App\Models\Location;

use App\Repository\LocationRepositoryInterface;

class LocationRepository extends BaseRepository implements LocationRepositoryInterface{
  protected $model;

  public function __construct(Location $model)
  {
    $this->model = $model;
  }
}