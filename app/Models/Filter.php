<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
