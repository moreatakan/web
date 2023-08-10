<?php

namespace App\Models;

use App\Models\Categoryizin;
use App\Models\standarpelayanan;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Izin extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];
    protected $table='izin';

    public function category()
    {
        return $this->belongsTo(Categoryizin::class, 'categoryizin_id');
    }

    public function spelayanan()
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
                'source' => 'namaizin'
            ]
        ];
    }

}
