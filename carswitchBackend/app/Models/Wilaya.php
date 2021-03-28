<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $region_id
 * @property string $name
 * @property string $code_postal
 * @property Region $region
 * @property Car[] $cars
 * @property Garage[] $garages
 */
class Wilaya extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'wilayas';

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
    protected $fillable = ['region_id', 'name_fr','name_ar', 'code_postal'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function garages()
    {
        return $this->hasMany('App\Models\Garage');
    }
}
