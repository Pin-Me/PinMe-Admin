<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Ar extends Model
{
    use HasFactory;

    protected $table = 'tb_ar';

    protected $fillable = [
        'filterId',
        'ar',
        'positionX',
        'positionY',
        'positionZ'
    ];

    public function filter()
    {
        return $this->belongsTo(Filter::class, 'filterId');
    }

    public function getArUrlAttribute()
    {
        return $this->ar ? url('storage/' . $this->ar) : null;
    }
}
