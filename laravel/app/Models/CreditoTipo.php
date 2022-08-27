<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditoTipo extends Model
{
    use HasFactory;

    protected $table = 'credito_tipos';

    protected $primaryKey = 'id';

    protected $fillable =[
        'tipos',
        'descripcion',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d h:i:s',
        'updated_at' => 'datetime:Y-m-d h:i:s',


    ];
}
