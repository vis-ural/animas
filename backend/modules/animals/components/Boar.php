<?php


namespace backend\modules\animals\components;

/**
 * Class Boar
 * Кабан
 * @package backend\modules\animals\components
 */
class Boar extends Animals implements AnimalsVoice
{
    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Кабан';

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
        return self::NAME_ANIMALS." {$this->name} хрюкает";
    }



}