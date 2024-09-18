<?php

namespace App\Models;
use App\Models\MetaData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataHub extends Model
{
    use HasFactory;

    protected $table   = "data_hubs";
    protected $guarded = ["id"];

    public function metaDatas()
    {
        return $this->hasMany(MetaData::class, 'project_id', 'id');
    }

}
