<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Textbook extends Model
{
    use HasFactory;
    protected $fillable = [
        'school_id', 'class_id','subject','bookname','publisher','book_image','hsn','gst','price'
    ];

}
