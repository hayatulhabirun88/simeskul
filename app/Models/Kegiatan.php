<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';
    protected $guarded = [];

    public function ekstrakulikuler()
    {
        return $this->belongsTo(Ekstrakulikuler::class);
    }

    public function pembina()
    {
        return $this->belongsTo(Pembina::class);
    }
}
