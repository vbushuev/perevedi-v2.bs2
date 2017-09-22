<?php
$res = [
    "bin" => (count($argv)>1)?$argv[1]:'546938',
    'direction' => 'crossboard',
    'bank' => 'Worldwide',
    'country' => 'Worldwide'
];
$bintest = file_get_contents('https://lookup.binlist.net/'.$res["bin"],false, stream_context_create(['http'=>
    [
        'timeout' => 10  //1200 Seconds is 20 Minutes
    ]
]));
$bintest = json_decode($bintest);
$jsonret = json_last_error();
if($jsonret == JSON_ERROR_NONE){
    if(in_array($bintest->country->numeric,['643','810'])){
        $res['direction']='indoor';
        $res['bank'] = isset($bintest->bank->name)?$bintest->bank->name:"unknown";
        $res['country']=$bintest->country->name;
    }
}
print_r($res);
?>
