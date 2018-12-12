<?php

 error_reporting( 0 );

getBalance('0x3c1d62726afb03aa2094789dee1fb60ab82ef44f');

function getBalance($adress){
 $data= file_get_contents('http://api.ethplorer.io/getAddressInfo/0x5d26793420526a7f30ee4596ec906d5e45669445?apiKey=freekey');
 $final=json_decode($data);

foreach($final as $key=>$value)
{
    if($key==tokens)
    {  
           for($a=0;$a<sizeof($value);$a++){
           $arr=$value[$a];
             if($arr->tokenInfo->address==$adress){
                echo '<pre>';
                print_r($arr->balance/1000000000000000000);
              }

       }   
    
     }
}
}
?>

