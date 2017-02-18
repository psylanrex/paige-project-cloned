<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; /* you don't have to name the table laravel adds (s) */
    protected $guarded = [];
    
    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    
    public function reason()
    {
        return $this->belongsTo(Reason::class, 'reason_id');
    }
    
    public function getReason()
    {
        return $this->reason->name;
    }
    
    public function getStateCode()
    {
        return $this->state->code;
    }
    
    public function getFullAddress()
    {
        return "{$this->business_address} \n {$this->city} state_code, {$this->zip_code}";
    }
}
