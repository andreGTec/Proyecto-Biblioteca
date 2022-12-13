<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class confirmarcompra extends Model
{
    use HasFactory;
    protected $compra = 'confirmarcompra'; 
    public function User()
    { 
        return $this->belongsTo(User::class);
    }
}