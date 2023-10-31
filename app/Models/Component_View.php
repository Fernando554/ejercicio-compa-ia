<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component_View extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'component__views';
    protected $fillable = [
        'name',
        'model_type',
    ];

    public function SectionComponent()
    {
        return $this->hasMany(SectionComponent::class, 'id');
    }

    public function ComponentViewData()
    {
        return $this->hasMany(Component_view_data::class, 'component_view_id');
    }

    public function ComponentViewDataOrder()
    {
        $ComponentViewData = [];
        foreach ($this->ComponentViewData as  $value) {
            $ComponentViewData[$value->key] = $value->value;
        }
        return $ComponentViewData;
    }
}
