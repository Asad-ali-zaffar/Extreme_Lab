<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;

class Organizations extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasApiTokens;
    use LogsActivity;

    public $guarded=[];

    public function getDescriptionForEvent(string $eventName): string
    {
        return "Patient was {$eventName}";
    }
    public static function getOrganizationsById($id){
        return Organizations::find($id)->pluck('name_eng')->first();
        //  App\Models\Organizations::getOrganizationsById($val->lab_no);
    }
}
