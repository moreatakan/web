<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spelayanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'spelayanan';

    public function izin()
    {
        return $this->belongsTo(Izin::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Categoryizin::class);
    }
}

