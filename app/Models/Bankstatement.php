<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Bankstatement extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'name', 'category_id', 'type', 'date', 'user_id'];

    public static function select(string $string)
    {
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public $incrementing = false;
}
