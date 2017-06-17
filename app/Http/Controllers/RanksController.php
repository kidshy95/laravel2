<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\RanksRepository;
use App\Repositories\SlidersRepository;


class RanksController extends Controller {

    protected $ranksRepository;
    protected $slidersRepository;

    public function __construct(RanksRepository $ranksRepository, SlidersRepository $slidersRepository)
    {
        $this->ranksRepository = $ranksRepository;
        $this->slidersRepository = $slidersRepository;
    }

    public function index()
    {
        $ranks = $this->ranksRepository->getAll();
        $sliders = $this->slidersRepository->getAll();
        return $sliders;
    }
}