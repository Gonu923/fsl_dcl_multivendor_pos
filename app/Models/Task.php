<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'vendor_id',
        'assigned_employee_id',
        'total_sale',
        'total_amount',
        'collection_date',
        'received_amount',
        'due_amount',
    ];
}
