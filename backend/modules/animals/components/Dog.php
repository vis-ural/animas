<?php


namespace backend\modules\animals\components;

/**
 * Class Dog
 * Cобака
 * @package backend\modules\animals\components
 */
class Dog extends Animals implements AnimalsVoice, AnimalsSwim, AnimalsHunt
{

    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Собака';

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
        return self::NAME_ANIMALS." {$this->name} лает";
    }

    /**
     * @return string
     */
    public function swim(): string
    {
        return self::NAME_ANIMALS." {$this->name} плавает";
    }

    /**
     * @return string
     */
    public function hunt(): string
    {
        return self::NAME_ANIMALS." {$this->name} на охоте";
    }



}