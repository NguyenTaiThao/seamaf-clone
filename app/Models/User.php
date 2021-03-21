<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;
    use \Askedio\SoftCascade\Traits\SoftCascadeTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $softCascade = ['carts'];

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
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

    public function products()
    {
        return $this->belongsToMany(Product::class, 'carts')
        ->wherePivot('status', Config::get('constant.CART_STATUS.IN_CART'))
        ->withPivot('quantity');
    }

    public function attachProduct($productId, $quantity)
    {
        $this->products()->attach($productId, ['quantity' => $quantity]);
    }

    public function detachProduct($productId)
    {
        $this->products()->detach($productId);
    }
}
