<?php

namespace App\Domain\Jobsheets;

use Illuminate\Database\Eloquent\Model;
use App\Domain\Users\User;

class Jobsheet extends Model
{
      protected $fillable = [
            'order_no',
            'bl_no' ,
            'mbl_no',
            'shipper',
            'consignee',
            'notify',
            'agent',
            'carrier',
            'feeder',
            'vessel',
            'pol',
            'pod',
            'trucking',
            'location',
            'order_date',
            'onboard',
            'arrrive',
            'reference',
            'cargo_type',
            'package',
            'gross_weight',
            'netweight',
            'commodity',
            'container_no',
        ];

      /**
       * jobsheet belongs to user
       * 
       * @return 
       */  
      public function user()
      {
            return $this->belongsTo(User::class);
      }
}
