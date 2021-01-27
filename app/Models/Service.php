<?php

namespace App\Models;

use App\Samuel\Interfaces\WithSlug;
use App\Samuel\Traits\WithSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Service Class
 * @package App\Models
 * @property string $title
 * @property string $slug
 * @property string $caption
 * @property boolean $active
 */

class Service extends Model implements WithSlug
{
    use HasFactory;
    use WithSlugTrait;

    protected $fillable = [
        'title',
        'slug',
        'caption',
        'active',
    ];

    private $slug;
}
