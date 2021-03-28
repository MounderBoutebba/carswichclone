<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property Wilaya[] $wilayas
 */
class Region extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'regions';


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
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wilayas()
    {
        return $this->hasMany('App\Models\Wilaya');
    }
}
