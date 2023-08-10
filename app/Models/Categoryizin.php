<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryizin extends Model
{
    use HasFactory;
    use Sluggable;
    
    protected $guarded = ['id'];
    protected $table = 'categoryizin';

    public function Izin()
    {
        return $this->hasMany(Izin::class);
    }

    public function sp()
    {
        return $this->hasOne(Spelayanan::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'namakategori'
            ]
        ];
    }
}
