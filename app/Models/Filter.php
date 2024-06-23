<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Filter extends Model
{
    use HasFactory;

    protected $table = 'tb_filter';

    protected $fillable = [
        'orderId',
        'namaFilter',
        'marker',
        'sound',
        'preview'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderId');
    }

    public function ars()
    {
        return $this->hasMany(Ar::class, 'filterId');
    }

    public function getMarkerUrlAttribute()
    {
        return $this->marker ? url('storage/' . $this->marker) : null;
    }

    public function getSoundUrlAttribute()
    {
        return $this->sound;
    }

    public function getPreviewUrlAttribute()
    {
        return $this->preview ? url('storage/' . $this->preview) : null;
    }
}
