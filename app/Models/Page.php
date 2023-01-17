<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Page extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'slug',
        'license',
        'content'
    ];

    /*
    public function getRouteKeyName(){
        return 'slug';
    }
    */
}
