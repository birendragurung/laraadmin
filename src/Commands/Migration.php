<?php
/**
 * Code generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com.
 */

namespace Dwij\Laraadmin\Commands;

use Dwij\Laraadmin\CodeGenerator;
use Illuminate\Console\Command;

/**
 * Class Migration.
 */
class Migration extends Command
{
    // The command signature.
    protected $signature = 'la:migration {table} {--generate}';

    // The command description.
    protected $description = 'Generate Migrations for LaraAdmin';

    /**
     * Generate a Migration file either sample or from DB Context.
     *
     * @return mixed
     */
    public function handle()
    {
        $table = $this->argument('table');
        $generateFromTable = $this->option('generate');
        if ($generateFromTable) {
            $generateFromTable = true;
        }
        CodeGenerator::generateMigration($table, $generateFromTable, $this);
    }
}
