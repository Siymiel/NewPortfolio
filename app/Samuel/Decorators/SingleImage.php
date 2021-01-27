<?php

namespace App\Samuel\Decorators;


use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * SingleImage class
 * @package App\Models
 * @property string $image_link
 */
class SingleImage extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $collectionName = 'image';

    public function getImageLinkAttribute()
    {
        if($image = $this->getFirstMedia($this->collectionName)) {
            return $image->getFullUrl();
        }
        return url('images/default.png');
    }

}