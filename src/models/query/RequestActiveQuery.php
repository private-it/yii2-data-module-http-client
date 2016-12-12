<?php
/**
 * Created by ERDConverter
 */
namespace PrivateIT\modules\httpClient\models\query;

use PrivateIT\modules\httpClient\models\Request;

/**
 * RequestActiveQuery
 *
 */
class RequestActiveQuery extends ActiveQuery
{
    /**
     * @inheritdoc
     * @return Request[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Request|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

    /*
    public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }
    */
}
