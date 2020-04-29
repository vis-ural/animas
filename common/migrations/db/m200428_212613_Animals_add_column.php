<?php

use yii\db\Migration;

/**
 * Class m200428_212613_Animals_add_column
 */
class m200428_212613_Animals_add_column extends Migration
{
    public function up()
    {
        $this->addColumn('{{%animals_animals}}', 'picture_path', $this->string(512));
        $this->addColumn('{{%animals_animals}}', 'picture_base_url', $this->string(512));
    }

    /**
     * @return bool|void
     */
    public function down()
    {
        $this->dropColumn('{{%animals_animals}}', 'picture_path');
        $this->dropColumn('{{%animals_animals}}', 'picture_base_url');
    }


}
