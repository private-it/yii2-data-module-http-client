<?php
/**
 * Created by ERDConverter
 */
namespace PrivateIT\modules\httpClient\models;

use PrivateIT\modules\httpClient\HttpClientModule;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * Response
 *
 * @property integer $id
 * @property integer $request_id
 * @property string $headers
 * @property string $body
 * @property integer $code
 * @property integer $status
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Request $request
 */
class Response extends ActiveRecord
{
    const STATUS_ARCHIVED = -1;
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    /**
     * Get object statuses
     *
     * @return array
     */
    static function getStatuses()
    {
        return [
            static::STATUS_ARCHIVED => Yii::t('http-client/response', 'const.status.archived'),
            static::STATUS_DELETED => Yii::t('http-client/response', 'const.status.deleted'),
            static::STATUS_ACTIVE => Yii::t('http-client/response', 'const.status.active'),
        ];
    }

    /**
     * @inheritdoc
     * @return query\ResponseActiveQuery the newly created [[ActiveQuery]] instance.
     */
    public static function find()
    {
        return parent::find();
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return HttpClientModule::tableName(__CLASS__);
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors[] = [
            'class' => TimestampBehavior::className(),
        ];
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('http-client/response', 'label.id'),
            'request_id' => Yii::t('http-client/response', 'label.request_id'),
            'headers' => Yii::t('http-client/response', 'label.headers'),
            'body' => Yii::t('http-client/response', 'label.body'),
            'code' => Yii::t('http-client/response', 'label.code'),
            'status' => Yii::t('http-client/response', 'label.status'),
            'updated_at' => Yii::t('http-client/response', 'label.updated_at'),
            'created_at' => Yii::t('http-client/response', 'label.created_at'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('http-client/response', 'hint.id'),
            'request_id' => Yii::t('http-client/response', 'hint.request_id'),
            'headers' => Yii::t('http-client/response', 'hint.headers'),
            'body' => Yii::t('http-client/response', 'hint.body'),
            'code' => Yii::t('http-client/response', 'hint.code'),
            'status' => Yii::t('http-client/response', 'hint.status'),
            'updated_at' => Yii::t('http-client/response', 'hint.updated_at'),
            'created_at' => Yii::t('http-client/response', 'hint.created_at'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributePlaceholders()
    {
        return [
            'id' => Yii::t('http-client/response', 'placeholder.id'),
            'request_id' => Yii::t('http-client/response', 'placeholder.request_id'),
            'headers' => Yii::t('http-client/response', 'placeholder.headers'),
            'body' => Yii::t('http-client/response', 'placeholder.body'),
            'code' => Yii::t('http-client/response', 'placeholder.code'),
            'status' => Yii::t('http-client/response', 'placeholder.status'),
            'updated_at' => Yii::t('http-client/response', 'placeholder.updated_at'),
            'created_at' => Yii::t('http-client/response', 'placeholder.created_at'),
        ];
    }

    /**
     * Get value from Id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value to Id
     *
     * @param $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Get value from RequestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Set value to RequestId
     *
     * @param $value
     * @return $this
     */
    public function setRequestId($value)
    {
        $this->request_id = $value;
        return $this;
    }

    /**
     * Get value from Headers
     *
     * @return string
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set value to Headers
     *
     * @param $value
     * @return $this
     */
    public function setHeaders($value)
    {
        $this->headers = $value;
        return $this;
    }

    /**
     * Get value from Body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set value to Body
     *
     * @param $value
     * @return $this
     */
    public function setBody($value)
    {
        $this->body = $value;
        return $this;
    }

    /**
     * Get value from Code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set value to Code
     *
     * @param $value
     * @return $this
     */
    public function setCode($value)
    {
        $this->code = $value;
        return $this;
    }

    /**
     * Get value from Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set value to Status
     *
     * @param $value
     * @return $this
     */
    public function setStatus($value)
    {
        $this->status = $value;
        return $this;
    }

    /**
     * Get value from UpdatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set value to UpdatedAt
     *
     * @param $value
     * @return $this
     */
    public function setUpdatedAt($value)
    {
        $this->updated_at = $value;
        return $this;
    }

    /**
     * Get value from CreatedAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set value to CreatedAt
     *
     * @param $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        $this->created_at = $value;
        return $this;
    }

    /**
     * Get relation Request
     *
     * @param string $class
     * @return query\RequestActiveQuery
     */
    public function getRequest($class = '\Request')
    {
        return $this->hasOne(static::findClass($class, __NAMESPACE__), ['id' => 'request_id']);
    }

}
