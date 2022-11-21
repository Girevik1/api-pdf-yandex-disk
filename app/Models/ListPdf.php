<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Helpers\UsesUuid;
use Illuminate\Database\Eloquent\Model;

class ListPdf extends Model
{
    // use HasFactory;
    use UsesUuid;

    protected $guarded = [];

    protected $table = 'list_pdf';
}
