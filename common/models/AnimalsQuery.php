<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Animals]].
 *
 * @see Animals
 */
class AnimalsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Animals[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Animals|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
