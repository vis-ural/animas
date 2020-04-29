<?php


namespace backend\modules\animals\components;

/**
 * Class Giraffe
 * Жираф
 * @package backend\modules\animals\components
 */
class Giraffe extends Animals implements AnimalsVoice
{
    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Жираф';

    /**
     * Dog constructor.
     * @param $name
     */
    function __construct($name='') {
        parent::__construct($name);
    }

    /**
     * @return string
     */
    public function voice(): string
    {
        return self::NAME_ANIMALS." {$this->name}  звук жирафа";
    }


}