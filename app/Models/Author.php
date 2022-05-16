<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'nationality'];

    public static $rules = array(
        'name' => 'required',
        'age' => 'integerlmin:0lmax:150',
        'nationality' => 'required'
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id .''.$this->name .'('. $this->age . '才'.')' .$this->nationality;
        return $txt;
    }
    public function book() {
        return $this->hasOne('App\Model\Book');
    }
    public function books() {
        return $this->hasMany('App\Model\Book');
    }
}
