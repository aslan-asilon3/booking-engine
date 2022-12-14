<?php

namespace App\Models\Visitor;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'visitor_banner';

    public $primaryKey = 'id';

    protected $fillable = [
        'banner_name',
        'banner_status',
        'uploaded_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
