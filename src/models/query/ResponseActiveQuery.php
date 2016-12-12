<?php
/**
 * Created by ERDConverter
 */
namespace PrivateIT\modules\httpClient\models\query;

use PrivateIT\modules\httpClient\models\Response;

/**
 * ResponseActiveQuery
 *
 */
class ResponseActiveQuery extends ActiveQuery
{
    /**
     * @inheritdoc
     * @return Response[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Response|array|null
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
