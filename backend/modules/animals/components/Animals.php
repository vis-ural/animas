<?php


namespace backend\modules\animals\components;


class Animals
{
    public $name;

    function __construct($name='') {

        $this->name = $name;
    }


    public function getButtons(){
        $out = [];
        if($this instanceof AnimalsHunt){
            $out[]= 'hunt';
        }
        if($this instanceof AnimalsVoice){
            $out[]= 'voice';
        }
        if($this instanceof AnimalsSwim){
            $out[]= 'swim';
        }

        return $out;
    }

}