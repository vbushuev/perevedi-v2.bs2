<?php namespace db\models;
use db\Model;
class Bintab extends Model{
    protected $timestampType = "timestamp";
    protected $fillable = ['bin','bank','country','direction'];
    public function __construct(){
        parent::__construct('binstab','bin');
    }
};
?>
