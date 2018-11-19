<?php

namespace App\Models\Admin\Settings;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name'];
    
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Admin\Settings\Role::class);
    }
}
