<?php
/**
 * Created by ERDConverter
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * m161212_181955_001_change_request
 *
 */
class m161212_181955_001_change_request extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

        $this->addColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'name', $this->string()->defaultValue("")->after('id'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropColumn(\PrivateIT\modules\httpClient\models\Request::tableName(), 'name');
    }
}