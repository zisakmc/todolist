<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Newtask extends Model
{
    use HasFactory, Sortable;
    
    protected $fillable =[
        'name',
        'title',
        'description',
        'content',
        'done',
    ];
    public $sortable = ['title', 'description', 'content', 'done'];

    public function users() {

        return $this->belongsTo(Users::class);
        
    }
}
