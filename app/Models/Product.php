<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','slug','price','description'];
    /**
     * @var mixed
     */

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
