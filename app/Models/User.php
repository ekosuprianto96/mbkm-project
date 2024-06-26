<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_role',
        'email_verified_at',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function mitra() {
        return $this->hasOne(MitraIss::class, 'user_id', 'id');
    }

    public function superAdmin() {
        return $this->hasOne(SuperAdmin::class, 'user_id', 'id');
    }

    public function role() {
        return $this->belongsTo(Role::class, 'id_role', 'id_role');
    }

    public function userRole() {
        return $this->role->nama;
    }

    public function groupMenus() {
        $menus = [];
        if($this->role->menus->count() <= 0) return $menus;
        
        foreach($this->role->menus as $menu) {
            $menus[$menu->module->group->nama][$menu->module->nama][] = $menu;
        }

        return $menus;
    }
}
