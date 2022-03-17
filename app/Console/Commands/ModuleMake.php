<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class ModuleMake extends Command
{

    private $files;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:module {name}
                                                   {--all}
                                                   {--view}
                                                   {--controller}
                                                   {--model}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();

        $this->files = $filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if($this->option('all')) {
            $this->input->setOption('view', true);
            $this->input->setOption('controller', true);
            $this->input->setOption('model', true);
        }

        if($this->option('model')) {
            $this->createModel();
        }

        if($this->option('controller')) {
            $this->createController();
        }

        if($this->option('view')) {
            $this->createView();
        }

    }

    private function createModel()
    {
        $model = Str::singular(Str::studly(class_basename($this->argument('name'))));

        $this->call('make:model',[
            'name' => "App\\Modules\\".trim($this->argument('name'))."\\Models\\".$model
        ]);

    }

    private function createController()
    {
        $controller = Str::studly(class_basename($this->argument('name')));
        $modelName = Str::singular(Str::studly(class_basename($this->argument('name'))));

        $path = $this->getControllerPath($this->argument('name'));


        if ($this->alreadyExists($path)) {
            $this->error('Controller already exists!');
        } else {
            $this->makeDirectory($path);

            $stub = $this->files->get(base_path('resources/stubs/controller.model.api.stub'));

            $stub = str_replace(
                [
                    'DummyNamespace',
                    'DummyRootNamespace',
                    'DummyClass',
                    'DummyFullModelClass',
                    'DummyIndexName',
                ],
                [
                    "App\\Modules\\".trim($this->argument('name'))."\\Controllers",
                    $this->laravel->getNamespace(),
                    $controller.'Controller',
                    "App\\Modules\\".trim($this->argument('name'))."\\Models\\{$modelName}",
                    class_basename($this->argument('name')).'Index',
                ],
                $stub
            );

            $this->files->put($path, $stub);
            $this->info('Controller created successfully.');
            //$this->updateModularConfig();
        }

        $this->createRoutes($controller, $modelName);


    }

    private function createView()
    {
        $paths = $this->getViewPath(strtolower($this->argument('name')));

        foreach ($paths as $path) {
            $view = Str::studly(class_basename($this->argument('name')));

            if ($this->alreadyExists($path)) {
                $this->error('View already exists!');
            } else {
                $this->makeDirectory($path);

                $stub = $this->files->get(base_path('resources/stubs/view.stub'));

                $stub = str_replace(
                    [
                        '',
                    ],
                    [
                    ],
                    $stub
                );

                $this->files->put($path, $stub);
                $this->info('View created successfully.');
            }
        }
    }

    protected function getViewPath($name) : object
    {
        $arrFiles = collect([
            strtolower($name).'_index',
        ]);

        //str_replace('\\', '/', $name)
        $paths = $arrFiles->map(function($item) use ($name){
            return base_path('resources/views/'.str_replace('\\', '/', $name).'/'.$item.".blade.php");
        });

        return $paths;
    }

    private function getControllerPath($argument)
    {
        $controller = Str::studly(class_basename($argument));
        return $this->laravel['path'].'/Modules/'.str_replace('\\', '/', $argument)."/Controllers/"."{$controller}Controller.php";

    }

    private function makeDirectory($path)
    {
        if (! $this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }

        return $path;
    }

    private function createRoutes(String $controller, String $modelName) : void
    {

        $routePath = $this->getRoutesPath($this->argument('name'));

        if ($this->alreadyExists($routePath)) {
            $this->error('Routes already exists!');
        } else {

            $this->makeDirectory($routePath);

            $stub = $this->files->get(base_path('resources/stubs/routes.web.stub'));

            $stub = str_replace(
                [
                    'DummyClass',
                    'DummyRoutePrefix',
                    'DummyModelVariable',
                    'DummyIndex',
                ],
                [
                    $controller.'Controller',
                    Str::plural(Str::snake(lcfirst($modelName), '-')),
                    lcfirst($modelName),
                    $controller.'Index',
                ],
                $stub
            );

            $this->files->put($routePath, $stub);
            $this->info('Routes created successfully.');
        }
    }

    private function getRoutesPath($name) : string
    {
        return $this->laravel['path'].'/Modules/'.str_replace('\\', '/', $name)."/Routes/web.php";

    }

    protected function alreadyExists($path) : bool
    {
        return $this->files->exists($path);
    }


}
