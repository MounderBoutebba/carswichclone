<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $inspection_id
 * @property integer $question_id
 * @property integer $car_picture_id
 * @property string $response
 * @property string $note
 * @property CarPicture $carPicture
 * @property Inspection $inspection
 * @property Question $question
 */
class ResponseQuestion extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'response_question';

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
    protected $fillable = ['inspection_id', 'question_id', 'car_picture_id', 'response', 'note'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carPicture()
    {
        return $this->belongsTo('App\Models\CarPicture');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inspection()
    {
        return $this->belongsTo('App\Models\Inspection');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
