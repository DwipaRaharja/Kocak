<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'capacity', 'base_price', 'is_active'])]
class RoomType extends Model
{
    protected function casts(): array {
        return[
            'capacity' => 'integer',
            'base_price' => 'decimal:2',
            'is_active' => 'boolean',
        ];
    }
}
