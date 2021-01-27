<?php

namespace app\Samuel\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait WithSlugTrait
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setSlugAttribute($title)
    {
        if($title)
        {
            $slug = Str::slug($title);

            do {
                    $this->attributes['slug'] = $slug;

                    $exists = Model::where('slug', $slug)->where('id', '!=', $this->id)->exists();

                    $slug = Str::slug($title).'-'.Str::random();

                }
            while($exists);
        }

    }
}