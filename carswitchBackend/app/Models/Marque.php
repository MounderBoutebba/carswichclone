<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property ModelsCar[] $modelsCars
 */
class Marque extends Model
{

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'marques';

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
    protected $fillable = ['name', 'logo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelsCars()
    {
        return $this->hasMany('App\Models\ModelsCar');
    }
}
