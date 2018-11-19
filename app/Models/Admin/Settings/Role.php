<?php

namespace App\Models\Admin\Settings;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Admin\Settings\Permission::class);
    }
}
