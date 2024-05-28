<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'tb_client';

    protected $fillable = [
        'nama',
        'nomor',
        'email'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'clientId');
    }
}
