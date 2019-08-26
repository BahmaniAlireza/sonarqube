<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function theme()
    {
        return $this->belongsTo('App\Models\Theme');
    }
    public function options()
    {
        return $this->belongsToMany('App\Models\Plugin');
    }
    public function payments()
    {
        return $this->belongsToMany('App\Models\Payment');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function host()
    {
        return $this->belongsTo('App\Models\Host');
    }
}
