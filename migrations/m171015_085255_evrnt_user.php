<?php

use yii\db\Migration;

class m171015_085255_evrnt_user extends Migration
{
/*
CREATE TABLE `evrnt_user` (
`id` INT NOT NULL AUTO_INCREMENT,
`username` VARCHAR(255) NOT NULL,
`name` VARCHAR(255) NOT NULL,
`surname` VARCHAR(255) NOT NULL,
`password` VARCHAR(255) NOT NULL,
`salt` VARCHAR(255) NOT NULL,
`access_token` VARCHAR(255) NULL DEFAULT NULL,
`created_at` INT NULL, 
PRIMARY KEY (`id`)
);
 */
    
    public function safeUp()
    {
        $this->createTable('evrnt_user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'surname' => $this->string(255)->notNull(),
            'password' => $this->string(255)->notNull(),
            'salt' => $this->string(255)->notNull(),
            'access_token' => $this->string(255)->null()->defaultValue('NULL'),
            'created_at' => $this->integer()->null()            
        ]);
    }

    public function safeDown()
    {
//        echo "m171015_085255_evrnt_user cannot be reverted.\n";
        $this->dropTable('evrnt_user');
//        return false;
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171015_085255_evrnt_user cannot be reverted.\n";

        return false;
    }
    */
}
