<?php


namespace app\models;


use yii\base\Model;

class Rate extends Model
{
    public function getRate()
    {
        $url = "https://bittrex.com/api/v1.1/public/getticker?market=btc-ltc";
        $fgc = file_get_contents($url);
        $json = json_decode($fgc, true);
        return $json;
    }
}