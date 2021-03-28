<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name_fr
 * @property string $name_en
 * @property string $name_ar
 * @property string $icon
 * @property Car[] $cars
 */
class Feature extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'features';

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
    protected $fillable = ['name_fr', 'name_en', 'name_ar', 'icon'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cars()
    {
        return $this->belongsToMany('App\Models\Car');
    }
}
