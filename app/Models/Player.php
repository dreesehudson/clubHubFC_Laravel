<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['first_name', 'last_name', 'user_id', 'team_id'];
    
    // protected $=['myTeam'];

    // public function myUser () {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }

    public function myTeam () {
        return $this->belongsTo('App\Models\Team', 'team_id');
    }   
}
