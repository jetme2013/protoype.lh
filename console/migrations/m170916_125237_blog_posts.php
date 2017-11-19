<?php

use yii\db\Migration;

class m170916_125237_blog_posts extends Migration
{

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%posts}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(155),
            'text' => $this->text(),
            'url' => $this->string(155),
            'status_id' => $this->smallInteger([1])->defaultValue(1),
            'sort' => $this->smallInteger([2])->defaultValue(50),

        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('{{%posts}}');
    }

}
