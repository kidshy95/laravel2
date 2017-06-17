<?php 

namespace App\Repositories;
use Illuminate\Foundation\Application;

abstract class BaseRepository implements RepositoryInterface
{

    protected $app;

    protected $model;
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    public function resetModel()
    {
        $this->makeModel();
    }

    abstract public function model();

    public function makeModel()
    {
        $model = $this->app->make($this->model());

        return $this->model = $model;
    }
    public function getAll()
    {
    	return $this->model->all();
    }

}