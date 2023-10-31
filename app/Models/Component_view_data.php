<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component_view_data extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'component_view_datas';
    protected $fillable = [
        'company_id',
        'component_view_id',
        'key',
        'value',
    ];

    Public function Section()
    {
        return $this->belongsTo(Section::class);
    }

    public function Component_View()
    {
        return $this->belongsTo(Component_View::class , 'component_view_id');
    }
}
