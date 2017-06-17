<?php 

namespace App\Repositories;
use App\Sliders;

class SlidersRepository extends BaseRepository {

    public function model()
    {
        return Sliders::class;
    }
}
// <?php 

// namespace App\Repositories;
// use App\Sliders;

// class EloquentSliders implements Repository
// {
// 	private $model;
// 	public function __construct()
// 	{
// 		$this->model = new Sliders;
// 	}
// 	public function getAll() {
// 		return $this->model->all();
// 	}
// 	public function getById($id) {
// 		return $this->findById($id);
// 	}
// 	public function create(array $attributes) {
// 		return $this->model->create($attributes);
// 	}
// 	public function update($id, array $attributes) {
// 		$todo = $this->model->findById($id);
// 		$todo->update($attributes);
// 		return $todo;
// 	}
// 	public function delete($id) {
// 		$this->findById($id)->delete();
// 		return true;
// 	}

// }