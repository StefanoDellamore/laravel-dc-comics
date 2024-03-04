<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    // I campi che sono mass assignable sono: src, title, type...
    protected $fillable = [
        'title',
        'description',       
        'thumb',            
        'seiries',           
        'sale_date',         
        'type',
    ];
}
