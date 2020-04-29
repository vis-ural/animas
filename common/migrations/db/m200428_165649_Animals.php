<?php

use yii\db\Migration;

/**
 * Class m200428_165649_Animals
 */
class m200428_165649_Animals extends Migration
{
    /**
     * Статус по умолчанию
     */
    const DEFAULT_STATUS = 0;
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%animals_animals}}', [
            'id' => $this->primaryKey(),
            'class' => $this->string(512)->notNull(),
            'name' => $this->string(512)->notNull(),
            'discription' => $this->text(),
            'status' => $this->smallInteger()->notNull()->defaultValue(self::DEFAULT_STATUS),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable("animals_animals");
    }


}
