<?php

namespace App\Models\Items;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $keterangan
 * @property string $nama
 */
class ItemPaketKeterangan extends Model
{
    use HasFactory;

    protected $table = 'item_paket_keterangans';
}
