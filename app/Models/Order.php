<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'tb_order';

    protected $fillable = [
        'clientId',
        'expiredDate',
        'isActive',
        'status'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'clientId');
    }
}
