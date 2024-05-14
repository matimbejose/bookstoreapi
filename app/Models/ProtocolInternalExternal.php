<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProtocolInternalExternal extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'reference_number',
        'provenance',
        'classification_code',
        'doc_date',
        'subject',
        'name_of_expander',
        'name_of_recipient',
        'date_of_receipt'
    ];
}
