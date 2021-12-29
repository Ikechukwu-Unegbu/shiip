<?php
namespace App\Repository\Eloquent;

use App\Repository\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentRepositoryInterface{

  protected $model;

  public function __construct(Model $model)
  {
    $this->model = $model; 
  }

  public function all(array $column = ['*'], array $relations =[]):collection{
    return $this->model->with($relations)->get($column);
  }

  public function findById(
    int $modelId,
    array $column = [],
    array $relations = [],
    array $append = []
  ):?Model{
    return $this->model->select($column)->with($relations)->findOrFail($modelId)->append($append);
  }

  public function create(array $payload):?Model{
    $model = $this->model->create($payload);
    return $model->fresh;
  }

  public function update(int $modelId, array $payload):bool{
    $model = $this->findById($modelId);
    return $model->update($payload);
  }

  // public function findById(

  // )

    public function attach(){
      
    }

}
