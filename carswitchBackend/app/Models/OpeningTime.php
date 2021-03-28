<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $morning_opening_time
 * @property string $morning_close_time
 * @property string $afternoon_opening_time
 * @property string $afternoon_close_time
 * @property Garage[] $garages
 * @property Garage[] $garages
 * @property Garage[] $garages
 * @property Garage[] $garages
 * @property Garage[] $garages
 * @property Garage[] $garages
 * @property Garage[] $garages
 */
class OpeningTime extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'opening_times';

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
    protected $fillable = ['name', 'morning_opening_time', 'morning_close_time', 'afternoon_opening_time', 'afternoon_close_time'];
}
