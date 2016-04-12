<?php

namespace App\Domain\Users;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

	protected $fillable = ['name', 'desc'];
	
    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
