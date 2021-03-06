<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\RetailDirectory;
use App\Models\TodayNews;
use App\Models\Customer;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'role',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function verifyUser(){
        return $this->hasOne(VerifyUser::class);
    }

    public function franchise(){
      return $this->hasMany(FranchiseDirectory::class, 'user_id');

    }

    public function today_news(){
      return $this->hasMany(TodayNews::class, 'user_id');

    }
    public function customer(){
        return $this->hasOne(Customer::class);
    }

    public function retail(){
      return $this->hasMany(RetailDirectory::class, 'user_id');
    }
}
