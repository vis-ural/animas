<?php


namespace backend\modules\animals\components;

/**
 * Class Deer
 * Олень
 * @package backend\modules\animals\components
 */
class Deer extends Animals implements AnimalsVoice
{
    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Олень';

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
        return self::NAME_ANIMALS." {$this->name} издает звук";
    }

}