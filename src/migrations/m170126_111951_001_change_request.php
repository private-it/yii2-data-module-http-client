<?php
/**
 * Created by ERDConverter
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * m170126_111951_001_change_request
 *
 */
class m170126_111951_001_change_request extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        
        $this->addColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'external_id', $this->string()->defaultValue(""));
        $this->addColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'data', $this->text()->defaultValue(""));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        
        $this->dropColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'external_id');
        $this->dropColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'data');
    }
}