<?php

use App\Modules\General\Models\Translate;

$Translate = new Translate();
$TranslateList = $Translate::where('deleted_at_int', '!=', 0)->get()->toArray();

foreach ($TranslateList as $Item) {
    $ItemJson = json_decode($Item['value'], true);
    $ReturnArray[$Item['key']] = $ItemJson['ge'];
}

return $ReturnArray;
