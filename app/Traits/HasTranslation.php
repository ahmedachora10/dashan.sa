<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

trait HasTranslation {
    public static function translation(Model $model)
    {
        if (strtolower(request()->method()) !== 'put') {
            $translationColumns = collect(Schema::getColumnListing($model->getTable()))
                ->filter(fn($item) => str($item)->endsWith('_ar'))
                ->map(fn($item) => str($item)->replaceEnd('_ar', ''))
                ->toArray();

            foreach ($translationColumns as $key) {
                $model->{$key} = app()->currentLocale() == 'ar' ? $model->{$key . '_ar'} : $model->{$key . '_en'};
            }
        }
    }
}
