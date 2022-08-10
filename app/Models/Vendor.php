<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name',
        'address',
        'vendor_picture',
        'nid',
        'trade_license',
        'category_id',
        'type',
        'contact_no',
        'bkash',
        'nagad',
        'commission',
        'status',
        'vendor_discount',
        'dcl_discount',
        'vendor_id_creator',
        'id_creator_position',
        'id_creator_area',
        'id_creator_position',
        'id_creator_position',
        'id_creator_position',
        'id_creator_position',
        'password',
    ];

    public function getAvatarUrl()
    {
        return Storage::url($this->vendor_picture);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

}
