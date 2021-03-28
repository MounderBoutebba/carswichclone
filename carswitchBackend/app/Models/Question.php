<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer $id
 * @property string $question_fr
 * @property string $question_en
 * @property string $question_ar
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property ResponseQuestion[] $responseQuestions
 */
class Question extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'questions';
    
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['question_fr', 'question_en', 'question_ar', 'type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responseQuestions()
    {
        return $this->hasMany('App\Models\ResponseQuestion');
    }
}
