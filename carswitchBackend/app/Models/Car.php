<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $body_id
 * @property integer $last_mileage_price_log_id
 * @property integer $last_inspection_id
 * @property integer $color_id
 * @property integer $wilaya_id
 * @property integer $model_id
 * @property string $status
 * @property string $tyre
 * @property string $document
 * @property string $roof
 * @property string $specs
 * @property string $drive_type
 * @property string $deal
 * @property string $seat
 * @property string $transmistion
 * @property string $energy
 * @property int $seat_number
 * @property int $cylindre_number
 * @property int $year
 * @property int $horse_power
 * @property string $license_plat
 * @property string $vin
 * @property boolean $used
 * @property string $torque
 * @property int $views
 * @property string $phone
 * @property boolean $featured
 * @property string $owner_description
 * @property string $car_overview
 * @property string $information
 * @property string $expiry_date
 * @property string $sold_at
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property CarBody $carBody
 * @property Color $color
 * @property Inspection $inspection
 * @property MileagePriceLog $mileagePriceLog
 * @property ModelsCar $modelsCar
 * @property User $user
 * @property Wilaya $wilaya
 * @property Feature[] $features
 * @property CarPicture[] $carPictures
 * @property History[] $historys
 * @property Inspection[] $inspections
 * @property MileagePriceLog[] $mileagePriceLogs
 * @property Rdv[] $rdvs
 * @property User[] $users
 */
class Car extends Model
{

    use HasFactory, SoftDeletes;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cars';


    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'last_mileage_price_log_id', 'last_inspection_id', 'color_id', 'wilaya_id', 'model_id', 'status', 'tyre', 'document', 'roof', 'specs', 'drive_type', 'deal', 'seat', 'transmistion', 'energy', 'number_of_owners', 'registration_document_path', 'control_document_path', 'seat_number', 'cylindre_number', 'year', 'horse_power', 'license_plat', 'vin', 'used', 'torque', 'views', 'phone', 'featured', 'owner_description', 'car_overview', 'information', 'expiry_date', 'sold_at', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function color()
    {
        return $this->belongsTo('App\Models\Color');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inspection()
    {
        return $this->belongsTo('App\Models\Inspection', 'last_inspection_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lastMileagePriceLog()
    {
        return $this->hasOne('App\Models\MileagePriceLog', 'id','last_mileage_price_log_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modelsCar()
    {
        return $this->belongsTo('App\Models\ModelsCar', 'model_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function wilaya()
    {
        return $this->belongsTo('App\Models\Wilaya');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function features()
    {
        return $this->belongsToMany('App\Models\Feature');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carPictures()
    {
        return $this->hasMany('App\Models\CarPicture');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historys()
    {
        return $this->hasMany('App\Models\History');
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
    public function mileagePriceLogs()
    {
        return $this->hasMany('App\Models\MileagePriceLog');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rdvs()
    {
        return $this->hasMany('App\Models\Rdv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_like_car');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buyers()
    {
        return $this->hasMany('App\Models\Buyer');
    }
}
