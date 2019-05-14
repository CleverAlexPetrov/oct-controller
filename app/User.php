<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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
    
     // Другие Eloquent свойства...

  /**
   * Получить все задачи пользователя.
   */
  public function tasks()
  {
    return $this->hasMany(Task::class);
  }
  
  /**
   * Получить пользователя - владельца данной задачи
   */
  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

