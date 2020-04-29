<?php


namespace backend\modules\animals\components;

/**
 * Class Kat
 * Кошка
 * @package backend\modules\animals\components
 */
class Kat extends Animals implements AnimalsVoice,AnimalsHunt
{
    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Кошка';

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
        return self::NAME_ANIMALS." {$this->name} мяукает";
    }

    /**
     * @return string
     */
    public function hunt(): string
    {
        return self::NAME_ANIMALS." {$this->name} ловит мышь";
    }
}