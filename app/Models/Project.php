<?php

namespace App\Models;

use App\Samuel\Decorators\SingleImage;
use App\Samuel\Interfaces\WithSlug;
use App\Samuel\Traits\WithSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Project class
 * @package app\Models
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property string $technology
 * @property boolean $active
 */

class Project extends SingleImage implements WithSlug
{
    use HasFactory;
    use WithSlugTrait;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'technology',
        'active',
    ];

    private $slug;
}
