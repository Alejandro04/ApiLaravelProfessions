<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name'
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

}