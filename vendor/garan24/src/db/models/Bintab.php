<?php namespace db\models;
use db\Model;
class Bintab extends Model{
    protected $timestampType = "timestamp";
    protected $fillable = ['bin','bank','country','direction'];
    public function __construct(){
        parent::__construct('vsb_bintab_list','id');
    }
    public static function find($a=''){
        $res = new Bintab;
        try{
            $res->getOne(['bin'=>$a]);
        }
        catch(\Exception $e){
            $res = false;
        }
        return $res;
    }
};
?>
