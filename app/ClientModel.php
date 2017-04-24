<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    protected $table = 'client';
    protected $fillable = [
        'name', 'rfc', 'cp', 'state', 'delegation', 'colony', 'street', 'num_int', 'num_ext', 'tel1', 'tel2','contact', 'email', 'email2', 'web_page', 'tax_regime',
    ];
}
