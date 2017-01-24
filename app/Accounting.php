<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    protected $dates = ['startdate', 'enddate'];

    protected $fillable = ['description', 'amount', 'type', 'period', 'startdate', 'enddate'];

    public static function types()
    {
      return ['Ausgabe', 'Einnahme'];
    }

    public static function periods()
    {
      return ['Einmalig', 'Täglich', 'Wöchentlich', 'Monatlich', 'Vierteljährlich', 'Halbjährlich', 'Jährlich'];
    }

    public function getAmountAttribute()
    {
      $amount =  $this->attributes['amount'];
      $v1 = floor($amount / 100);
      $v2 = $amount % 100;

      return "$v1,$v2";
    }

    public function setAmountAttribute($value)
    {
      $value = str_replace(',', '.', $value);
      $this->attributes['amount'] = $value*100;
    }

    public function setStartdateAttribute($value)
    {
      $this->attributes['startdate'] = strlen($value) ? $value : null;
    }

    public function setEnddateAttribute($value)
    {
      $this->attributes['enddate'] = strlen($value) ? $value : null;
    }
}
