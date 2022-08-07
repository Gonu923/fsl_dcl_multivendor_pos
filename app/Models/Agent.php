<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
            'name',
            'address',
            'category_id',
            'agent_picture',
            'agent_business_name',
            'agent_contact_number',
            'agent_bkash_no',
            'agent_nid',
            'agent_trade_license',
            'agent_commission',
            'agent_password',
    ];

    public function getCatImage()
    {
        return Storage::url($this->agent_picture);
    }
}
