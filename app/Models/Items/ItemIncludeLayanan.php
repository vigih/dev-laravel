<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property string $label
 */
class ItemIncludeLayanan extends Model
{
    use HasFactory;

    protected $table = 'item_include_layanans';
}
