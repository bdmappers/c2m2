<?php

namespace Modules\Covid\Entities;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Covidcase extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'covidcases';

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // protected static function newFactory()
    // {
    //     return \Modules\Covid\Database\Factories\CovidcaseFactory::new();
    // }
}
