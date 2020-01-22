<?php
/**
 * Code generated using LaraAdmin
 * Help: http://laraadmin.com
 * LaraAdmin is open-sourced software licensed under the MIT license.
 * Developed by: Dwij IT Solutions
 * Developer Website: http://dwijitsolutions.com.
 */

namespace Dwij\Laraadmin\Commands;

use Config;
use Dwij\Laraadmin\CodeGenerator;
use Exception;
use Illuminate\Console\Command;

/**
 * Class Crud.
 */
class Crud extends Command
{
    // ================ CRUD Config ================
    public $module = null;
    public $controllerName = '';
    public $modelName = '';
    public $moduleName = '';
    public $dbTableName = '';
    public $singularVar = '';
    public $singularCapitalVar = '';

    // The command signature.
    protected $signature = 'la:crud {module}';

    // The command description.
    protected $description = 'Generate CRUD\'s, Controller, Model, Routes and Menu for given Module.';

    /**
     * Generate a CRUD files including Controller, Model, Views, Routes and Menu.
     *
     * @throws Exception
     */
    public function handle()
    {
        $module = $this->argument('module');

        try {
            $config = CodeGenerator::generateConfig($module, 'fa-cube');

            CodeGenerator::createController($config, $this);
            CodeGenerator::createModel($config, $this);
            CodeGenerator::createViews($config, $this);
            CodeGenerator::appendRoutes($config, $this);
            CodeGenerator::addMenu($config, $this);
        } catch (Exception $e) {
            $this->error('Crud::handle exception: '.$e);

            throw new Exception('Unable to generate migration for '.($module).' : '.$e->getMessage(), 1);
        }
        $this->info("\nCRUD successfully generated for ".($module)."\n");
    }
}
