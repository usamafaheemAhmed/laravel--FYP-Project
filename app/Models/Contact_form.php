<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_form extends Model
{
    use HasFactory;

    protected $table = 'contact_form';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
