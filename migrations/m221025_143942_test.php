<?php


use yii\db\Migration;

/**
 * Class m221025_143942_test
 */
class m221025_143942_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
           $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('test', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
        ], $tableOptions);


    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        echo "m221025_143942_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221025_143942_test cannot be reverted.\n";

        return false;
    }
    */
}
