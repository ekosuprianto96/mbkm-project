<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraIss extends Model
{
    use HasFactory;

    protected $table = 'tb_mitraiss';
    protected $guarded = ['idmitra'];
    public $primaryKey = 'idmitra';
    public $timestamps = false;

    public function account() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
