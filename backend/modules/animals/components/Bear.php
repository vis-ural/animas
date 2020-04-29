<?php


namespace backend\modules\animals\components;

/**
 * Class Bear
 * Медведь
 * @package backend\modules\animals\components
 */
class Bear extends Animals implements AnimalsHunt, AnimalsSwim, AnimalsVoice
{
    /**
     * Название животного
     */
    const NAME_ANIMALS = 'Медведь';

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
        return self::NAME_ANIMALS." {$this->name} рычит";
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
        return self::NAME_ANIMALS." {$this->name} охотится";
    }
}