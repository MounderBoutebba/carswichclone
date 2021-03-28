<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $garage_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $picture
 * @property string $birthday
 * @property string $city
 * @property string $address
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Garage $garage
 * @property Role $role
 * @property History[] $historys
 * @property Inspection[] $inspections
 * @property Rdv[] $rdvs
 */

use Laravel\Passport\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BackofficeUser extends Model implements AuthenticatableContract, AuthorizableContract
{

    use HasFactory, HasApiTokens, Authenticatable, Authorizable, SoftDeletes;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'backoffice_users';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['role_id', 'garage_id', 'first_name', 'last_name', 'email', 'phone', 'picture', 'birthday', 'city', 'address', 'created_at', 'updated_at', 'deleted_at'];

    protected $hidden = [
        'password'
    ];

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
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historys()
    {
        return $this->hasMany('App\Models\History', 'admin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inspections()
    {
        return $this->hasMany('App\Models\Inspection', 'admin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rdvs()
    {
        return $this->hasMany('App\Models\Rdv', 'admin_id');
    }
}
