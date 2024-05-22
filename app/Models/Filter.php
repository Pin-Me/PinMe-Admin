<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $table = 'tb_filter';

    protected $fillable = [
        'idClient',
        'namaFilter',
        'Preview',
        'Filter',
        'expiredDate',
        'isActive'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'idClient');
    }
}
