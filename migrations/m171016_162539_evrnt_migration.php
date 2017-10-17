<?php

use yii\db\Migration;

class m171016_162539_evrnt_migration extends Migration
{
    public function safeUp()
    {
        $this->renameTable('migration', 'evrnt_migration');
        $this->dropColumn('evrnt_user', 'salt');
        $this->renameColumn('evrnt_user', 'password', 'password_hash');
        $this->addColumn('evrnt_user', 'auth_key', 'string');
    }

    public function safeDown()
    {
        echo "m171016_162539_evrnt_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171016_162539_evrnt_migration cannot be reverted.\n";

        return false;
    }
    */
}
