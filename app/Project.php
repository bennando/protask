<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
      'title','description','type','client','due_date','cost','user_id',
  ];
  // protected $guilded = ['id'];
  public function user(){
     return $this->belongTo(User::class);
 }

}
