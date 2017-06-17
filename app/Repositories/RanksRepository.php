<?php 

namespace App\Repositories;
use App\Ranks;

class RanksRepository extends BaseRepository {

    public function model()
    {
        return Ranks::class;
    }
}