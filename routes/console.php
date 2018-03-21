<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/
Artisan::command('make:repository {name}', function () {
    $name = $this->argument('name');
    $className = $name.'Repository';
    $filePath = 'app/Repository/'.$className.'.php';
    $classFile = fopen(base_path($filePath), 'w');
    if (file_exists($filePath)) {
        return $this->error($filePath.' has exists');
    }
    $info = "<?php\n\n".
            "namespace App\Repository;\n\n".
            "use App\Models\\".$name.";\n\n".
            "class ".$className." extends BaseRepository".
            "\n{".
            "\n    public function __construct(".$name.' $baseModel)'.
            "\n    {\n".
            '        $this->baseModel = $baseModel;'.
            "\n    }".
            "\n}".
            "\n";
    fwrite($classFile, $info);
})->describe('Create a new repository class');

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
