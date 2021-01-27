<?php

namespace App\Models;

use App\Samuel\Decorators\SingleImage;
use App\Samuel\Interfaces\WithSlug;
use App\Samuel\Traits\WithSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Client Class
 * @package string $title
 * @package string $slug
 * @package string $body
 * @package string $fullname
 * @package boolean $active
 */

class Client extends SingleImage implements WithSlug
{
    use HasFactory;
    use WithSlugTrait;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'active',
    ];

    private $slug;
}
