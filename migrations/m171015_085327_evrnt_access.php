<?php

use yii\db\Migration;

class m171015_085327_evrnt_access extends Migration
{
/*    
CREATE TABLE `evrnt_access` (
`id` INT NOT NULL AUTO_INCREMENT,
`note_id` INT NOT NULL,
`user_id` INT NOT NULL, 
PRIMARY KEY (`id`)
) 
 */   
    public function safeUp()
    {
        $this->createTable('evrnt_access', [
            'id' => $this->primaryKey(),
            'note_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull()        
        ]);
    }

    public function safeDown()
    {
//        echo "m171015_085327_evrnt_access cannot be reverted.\n";
//        return false;
        $this->dropTable('evrnt_access');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171015_085327_evrnt_access cannot be reverted.\n";

        return false;
    }
    */
}
