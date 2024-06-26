<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = ['id_role'];
    public $primaryKey = 'id_role';

    public function user() {
        return $this->hasMany(User::class, 'id_role', 'id_role');
    }

    public function menus() {
        return $this->belongsToMany(Menus::class, 'menu_role', 'id_role', 'id_menu', 'id_role', 'id_menu');
    }
}
