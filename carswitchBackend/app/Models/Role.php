<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property BackofficeUser[] $backofficeUsers
 * @property Authorization[] $authorizations
 */
class Role extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'roles';


    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function backofficeUsers()
    {
        return $this->hasMany('App\Models\BackofficeUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function authorizations()
    {
        return $this->belongsToMany('App\Models\Authorization', 'role_authorization');
    }
}
