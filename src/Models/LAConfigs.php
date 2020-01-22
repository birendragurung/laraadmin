<?php
/**
 * Code generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com.
 */

namespace Dwij\Laraadmin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LAConfigs.
 */
class LAConfigs extends Model
{
    protected $table = 'la_configs';

    protected $fillable = [
        'key', 'value',
    ];

    protected $hidden = [

    ];

    /**
     * Get configuration string value by using key such as 'sitename'.
     *
     * LAConfigs::getByKey('sitename');
     *
     * @param $key key string of configuration
     *
     * @return bool value of configuration
     */
    public static function getByKey($key)
    {
        $row = self::where('key', $key)->first();
        if (isset($row->value)) {
            return $row->value;
        } else {
            return false;
        }
    }

    /**
     * Get all configuration as object.
     *
     * LAConfigs::getAll();
     *
     * @return object
     */
    public static function getAll()
    {
        $configs = [];
        $configs_db = self::all();
        foreach ($configs_db as $row) {
            $configs[$row->key] = $row->value;
        }

        return (object) $configs;
    }
}
