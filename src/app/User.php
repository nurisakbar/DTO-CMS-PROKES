<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','group','user_id','role','group_id','uniq_id','group_main_id','google_id','photo'
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

    public function users()
    {
        return $this->hasMany(\App\User::class);
    }
    
    public function jenisSurvey()
    {
        return $this->hasMany(\App\JenisSurvey::class);
    }

    public function instrument()
    {
        return $this->hasMany(\App\Instrument::class);
    }

    public function survey()
    {
        return $this->hasMany(\App\Survey::class);
    }

    public function group()
    {
        //return $this->belongsTo(\App\Group::class, 'group_id', 'kode_referensi')
        return $this->belongsTo(\App\Group::class, 'group_id', 'id')
        //->orWhere('group_id', 'id')
        ->withDefault(['nama_group'=>'-']);
    }
    
    
    public function groups()
    {
        return $this->hasMany(\App\Group::class);
    }

    public function instrumentSurvey()
    {
        return $this->hasMany(\App\InstrumentSurvey::class);
    }
}
