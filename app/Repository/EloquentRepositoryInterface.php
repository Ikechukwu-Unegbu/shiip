<?php
namespace App\Repository;

//use Illuminate\Datatbase\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface EloquentRepositoryInterface{
  public function all(array $column =['*'], array $relations=[]):Collection;

  public function findById(
    int $modelid,
    array $column = ['*'],
    array $relations = [],
    array $appends = []
  ):?Model;

  public function create(array $payload):?Model;

  public function update(int $modelid, array $payload):bool;

  // public function restoryById(int $modelid):bool;
    
  //public function attach()
}