<?php
/**
 * Created by ERDConverter
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * m161212_065257_002_create_response
 *
 */
class m161212_065257_002_create_response extends Migration
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

        $this->createTable(\PrivateIT\modules\httpClient\models\Response::tableName(), [
            'id' => $this->primaryKey(),
            'request_id' => $this->integer()->defaultValue(0),
            'headers' => $this->text()->defaultValue(""),
            'body' => $this->text()->defaultValue(""),
            'code' => $this->integer()->defaultValue(0),
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
        $this->dropTable(\PrivateIT\modules\httpClient\models\Response::tableName());
    }
}