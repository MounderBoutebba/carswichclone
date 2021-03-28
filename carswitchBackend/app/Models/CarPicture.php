<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property integer $car_id
 * @property string $path
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Car $car
 * @property ResponseQuestion[] $responseQuestions
 */
class CarPicture extends Model
{

    use SoftDeletes;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'car_pictures';


    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['car_id', 'path', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Car');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responseQuestions()
    {
        return $this->hasMany('App\Models\ResponseQuestion');
    }
}
