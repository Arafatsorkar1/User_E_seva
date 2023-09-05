<?php

namespace App\Models\Transasction;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trensactionHead extends Model
{
    use HasFactory;

    public  static $create ;

    protected static $transaction_id;

    public  static function updateOrcreateID($request)
    {

//        $trans_id = IdGenerator::generate(['table' =>
//            'transactions',
//            'field'=>
//                'transaction_id',
//            'length' => 15,
//            'prefix' =>"SEBA-BD-200"]);

        self::$create = new trensactionHead();
        self::$create->user_id      = auth()->id();
        self::$create->trans_id     = $request->input('trans_id');
        self::$create->trans_buy    = $request->trans_buy;
        self::$create->payment      = $request->payment;
        self::$create->purpose      = $request->purpose;
        self::$create->save();

    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
