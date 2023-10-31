<?php

namespace App\Helpers;

use App\Models\Component_view_data;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ComponentHelper
{
        public static function createComponentData($component, $CustomViewId, $data)
        {
            foreach ($data as $key => $body) {
                Component_view_data::create([
                    'key' => $key,
                    'value' => $body,
                    'company_id' => $CustomViewId,
                    'component_view_id' => $component->id,
                ]);
            }
        }
    
        public static function updateComponentData($component, $CustomViewId, $data)
        {
            foreach ($data as $key => $body) {
                $componentData = Component_view_data::updateOrCreate([
                    'company_id' => $CustomViewId,
                    'component_view_id' => $component->id,
                    'key' => $key,
                ], [
                    'value' => $body,
                ]);
            }
        }
}

