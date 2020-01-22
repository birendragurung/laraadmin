<?php
/**
 * Model generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com.
 */

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    use SoftDeletes;

    protected $table = 'roles';

    protected $hidden = [

    ];

    protected $guarded = [];

    protected $dates = ['deleted_at'];
}
