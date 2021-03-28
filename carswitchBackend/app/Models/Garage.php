<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $wilaya_id
 * @property integer $sunday_time
 * @property integer $monday_time
 * @property integer $tuesday_time
 * @property integer $wednesday_time
 * @property integer $thursday_time
 * @property integer $friday_time
 * @property integer $saturday_time
 * @property string $name
 * @property string $address
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property OpeningTime $openingTime
 * @property Wilaya $wilaya
 * @property BackofficeUser[] $backofficeUsers
 * @property Inspection[] $inspections
 * @property Rdv[] $rdvs
 */
class Garage extends Model
{

    use HasFactory;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'garages';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['wilaya_id', 'sunday_time', 'monday_time', 'tuesday_time', 'wednesday_time', 'thursday_time', 'friday_time', 'saturday_time', 'name', 'address'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function FridayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'friday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function MondayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'monday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function SaturdayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'saturday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function SundayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'sunday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ThursdayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'thursday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function TuesdayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'tuesday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function WednesdayOpeningTime()
    {
        return $this->belongsTo('App\Models\OpeningTime', 'wednesday_time');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function backofficeUsers()
    {
        return $this->hasMany('App\Models\BackofficeUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inspections()
    {
        return $this->hasMany('App\Models\Inspection');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rdvs()
    {
        return $this->hasMany('App\Models\Rdv');
    }
}
