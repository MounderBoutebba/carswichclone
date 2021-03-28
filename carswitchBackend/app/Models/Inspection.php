<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $car_id
 * @property integer $rdv_id
 * @property integer $admin_id
 * @property integer $garage_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property BackofficeUser $backofficeUser
 * @property Car $car
 * @property Garage $garage
 * @property Rdv $rdv
 * @property Car[] $cars
 * @property ResponseQuestion[] $responseQuestions
 */
class Inspection extends Model
{

    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'inspections';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['car_id', 'rdv_id', 'admin_id', 'garage_id', 'type', 'created_at', 'updated_at', 'deleted_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function garage()
    {
        return $this->belongsTo('App\Models\Garage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rdv()
    {
        return $this->belongsTo('App\Models\Rdv');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cars()
    {
        return $this->hasMany('App\Models\Car', 'last_inspection_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responseQuestions()
    {
        return $this->hasMany('App\Models\ResponseQuestion');
    }
}
