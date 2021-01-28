<?php

namespace App\Models;

use App\Samuel\Interfaces\WithSlug;
use App\Samuel\Traits\WithSlugTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Contact Class
 * @package App\Models
 * @property string $full_name
 * @property string $slug
 * @property string $email
 * @property integer $phone_number
 * @property string $message
 */

class Contact extends Model implements WithSlug
{
    use HasFactory;
    use WithSlugTrait;

    protected $fillable = [
        'full_name',
        'slug',
        'email',
        'phone_number',
        'message',
    ];
}
