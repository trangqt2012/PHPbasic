<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function checkLogin($name, $pass)
    {
        $login = DB::table('users')->where([['name', $name], ['password', $pass]])->first();
        return $login;
    }
    public static function userByID($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return $user;
    }
    public static function showAccount()
    {
        $user = DB::table('users')->get();
        return $user;
    }
    public static function showAccountUser()
    {
        $user = DB::table('users')->where('permission',0)->get();
        return $user;
    }
    public static function showAccountAdmin()
    {
        $user = DB::table('users')->where('permission',1)->get();
        return $user;
    }
}
