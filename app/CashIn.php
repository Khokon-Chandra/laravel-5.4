<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CashIn extends Model
{
    protected $guarded = ['id'];
    public function member()
    {
    	return $this->belongsTo(Member::class);
    }
}
