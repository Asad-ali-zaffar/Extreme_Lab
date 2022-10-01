<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;

class CustomerRegistration extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasApiTokens;
    use LogsActivity;

    public $guarded=[];

    public function vendor_labs()
    {
        return $this->hasMany(CustomerRegistrationLab::class,'customer_registration_id','id');
    }
    public function vendor_centers()
    {
        return $this->hasMany(CustomerRegistrationCenter::class,'customer_registration_id','id');
    }
	/* public function labs()
    {
        return $this->belongsTo(CustomerRegistrationLab::class,'customer_registration_id','id');
    } */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "Patient was {$eventName}";
    }

    public function tests()
    {
        return $this->hasMany(Group::class,'party_id','id');
    }

    public function patient()
    {
        return $this->hasManyThrough(
            Patient::class,
            Group::class,
            'party_id',
            'patient_id'
        );
    }
}
