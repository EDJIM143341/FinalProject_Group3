<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type', 'manufacturer', 'image'
    ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}