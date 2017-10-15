<?php

use yii\db\Migration;

class m171015_085311_evrnt_note extends Migration
{
/*
CREATE TABLE `evrnt_note` (
`id` INT NOT NULL AUTO_INCREMENT,
`text` TEXT NOT NULL,
`creator` INT NOT NULL,
`created_at` INT NULL, 
PRIMARY KEY (`id`)
);
 */    
    
    public function safeUp()
    {
        $this->createTable('evrnt_note', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull(),
            'creator' => $this->integer()->notNull(),
            'created_at' => $this->integer()->null()            
        ]);
    }

    public function safeDown()
    {
//        echo "m171015_085311_evrnt_note cannot be reverted.\n";
//        return false;
        $this->dropTable('evrnt_note');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171015_085311_evrnt_note cannot be reverted.\n";

        return false;
    }
    */
}
