<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class sheetone extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table = "tableSheetOne";
    protected $fillable = [
        'segment'                ,
        'country'                ,
        'product'                ,
        'country'                ,
        'unitSolid'              ,
        'ManuFactoring'          ,
        "sale_price"             ,
        "gross_sales"            ,
        "discounts"              ,
        "sales"                  ,
        "cogs"                   ,
        "profit"                 ,
        "date"                   ,
        "month_number"           ,
        "month_name"             ,
        "year"                   ,
    
    ];

   
}
