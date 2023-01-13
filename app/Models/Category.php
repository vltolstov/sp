<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function slug()
    {
        return $this->hasOne(Slug::class);
    }

    public function image()
    {
        return$this->hasOne(Image::class);
    }

    public function seoSet()
    {
        return $this->hasOne(SeoSet::class);
    }

    public function parametrSet()
    {
        return $this->hasOne(ParametrSet::class);
    }

    public function contentSet()
    {
        return$this->hasOne(ContentSet::class);
    }

}
