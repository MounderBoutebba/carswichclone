<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $admin_id
 * @property integer $car_id
 * @property int $id
 * @property string $ip
 * @property string $latitude
 * @property string $longitude
 * @property string $country
 * @property string $city
 * @property string $node
 * @property string $created_at
 * @property string $updated_at
 * @property BackofficeUser $backofficeUser
 * @property Car $car
 */
class History extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'historys';

    /**
     * @var array
     */
    protected $fillable = ['admin_id', 'car_id', 'id', 'ip', 'latitude', 'longitude', 'country', 'city', 'node', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function backofficeUser()
    {
        return $this->belongsTo('App\Models\BackofficeUser', 'admin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }
}
