<?php

namespace App\Models;

use App\Traits\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, HasImage;
    protected $guarded = [];
    public const IMAGE_PATH = 'images';
    // public const BASE_URL = 'scholarship/applicants';
    // public const VIEWS_PATH = 'scholarship.applicant.';
    // public const IMAGE_DIRECTORY = 'app/public/image/applicant';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function videos(){
        return $this->hasMany(Video::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function getImageUrl(){
        return secure_asset('images')."/".$this->image;
    }
}
