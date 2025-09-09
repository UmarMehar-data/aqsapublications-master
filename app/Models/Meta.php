<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meta extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'metaable_type',
        'metaable_id',
        'name',
        'content',
    ];


    public function metaable(){
        $this->morphTo();
    }
}
