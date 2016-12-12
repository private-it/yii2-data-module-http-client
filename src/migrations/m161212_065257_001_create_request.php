<?php
/**
 * Created by ERDConverter
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * m161212_065257_001_create_request
 *
 */
class m161212_065257_001_create_request extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(\PrivateIT\modules\httpClient\models\Request::tableName(), [
            'id' => $this->primaryKey(),
            'url' => $this->string()->defaultValue(""),
            'headers' => $this->text()->defaultValue(""),
            'body' => $this->text()->defaultValue(""),
            'method' => $this->string()->defaultValue(""),
            'format_request' => $this->string()->defaultValue(""),
            'format_response' => $this->string()->defaultValue(""),
            'status' => $this->integer()->defaultValue(0),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultValue(null),
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable(\PrivateIT\modules\httpClient\models\Request::tableName());
    }
}