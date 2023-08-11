<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'reviewer_name' ,
        'reviewer_designation',
        'reviewer_photo',
        'review',
        'rating',
    ];
}
