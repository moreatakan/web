<?php

namespace App\Models;

use App\Models\Izin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class standarpelayanan extends Model
{
    use HasFactory;

    protected $guarded =['id'];
    protected $table = 'standarpelayanan';

    public function Izin()
    {
        return $this->hasMany(Izin::class);
    }
}
