<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = ['name','category'.'version','description','url_image','price'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
