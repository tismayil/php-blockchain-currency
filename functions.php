<?php

class fnc
{

  private $sitename;

  public function b0t($adr , $POST = null)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL , $adr);
      if($POST != null)
      {
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $POST );
      }
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $return = curl_exec ($ch);
    curl_close ($ch);
    return $return;
  }

  public function getFlag( $kur )
  {
    $array = array('USD' => 'flag/US.png' , 'AUD' => 'flag/AU.png' , 'BRL' => 'flag/BR.png' , 'CAD' => 'flag/CA.png' , 'CHF' => 'flag/SE.png' , 'CLP' => 'flag/CL.png' , 'CNY' => 'flag/CN.png',
                   'DKK' => 'flag/DK.png' , 'EUR' => 'flag/EU.png' , 'GBP' => 'flag/GB.png' , 'HKD' => 'flag/HK.png' , 'INR' => 'flag/IN.png' , 'ISK' => 'flag/IS.png' , 'JPY' => 'flag/JP.png',
                   'KRW' => 'flag/KR.png' , 'NZD' => 'flag/NZ.png' , 'PLN' => 'flag/PL.png' , 'RUB' => 'flag/RU.png' , 'SEK' => 'flag/SE.png' , 'SGD' => 'flag/SG.png' , 'THB' => 'flag/TH.png',
                   'TWD' => 'flag/TW.png' , 'TRY' => 'flag/TR.png');

       if(isset($array[$kur]))
       {
         return "<img src='".$array[$kur]."'>";
       }
       else
       {
          return false;
       }

  }

}

?>
