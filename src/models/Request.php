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
 * Request
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property string $headers
 * @property string $body
 * @property string $method
 * @property string $format_request
 * @property string $format_response
 * @property integer $status
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Response[] $responses
 */
class Request extends ActiveRecord
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
            static::STATUS_ARCHIVED => Yii::t('http-client/request', 'const.status.archived'),
            static::STATUS_DELETED => Yii::t('http-client/request', 'const.status.deleted'),
            static::STATUS_ACTIVE => Yii::t('http-client/request', 'const.status.active'),
        ];
    }

    /**
     * @inheritdoc
     * @return query\RequestActiveQuery the newly created [[ActiveQuery]] instance.
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
            'value' => new Expression('NOW()'),
        ];
        return $behaviors;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('http-client/request', 'label.id'),
            'name' => Yii::t('http-client/request', 'label.name'),
            'url' => Yii::t('http-client/request', 'label.url'),
            'headers' => Yii::t('http-client/request', 'label.headers'),
            'body' => Yii::t('http-client/request', 'label.body'),
            'method' => Yii::t('http-client/request', 'label.method'),
            'format_request' => Yii::t('http-client/request', 'label.format_request'),
            'format_response' => Yii::t('http-client/request', 'label.format_response'),
            'status' => Yii::t('http-client/request', 'label.status'),
            'updated_at' => Yii::t('http-client/request', 'label.updated_at'),
            'created_at' => Yii::t('http-client/request', 'label.created_at'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'id' => Yii::t('http-client/request', 'hint.id'),
            'name' => Yii::t('http-client/request', 'hint.name'),
            'url' => Yii::t('http-client/request', 'hint.url'),
            'headers' => Yii::t('http-client/request', 'hint.headers'),
            'body' => Yii::t('http-client/request', 'hint.body'),
            'method' => Yii::t('http-client/request', 'hint.method'),
            'format_request' => Yii::t('http-client/request', 'hint.format_request'),
            'format_response' => Yii::t('http-client/request', 'hint.format_response'),
            'status' => Yii::t('http-client/request', 'hint.status'),
            'updated_at' => Yii::t('http-client/request', 'hint.updated_at'),
            'created_at' => Yii::t('http-client/request', 'hint.created_at'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributePlaceholders()
    {
        return [
            'id' => Yii::t('http-client/request', 'placeholder.id'),
            'name' => Yii::t('http-client/request', 'placeholder.name'),
            'url' => Yii::t('http-client/request', 'placeholder.url'),
            'headers' => Yii::t('http-client/request', 'placeholder.headers'),
            'body' => Yii::t('http-client/request', 'placeholder.body'),
            'method' => Yii::t('http-client/request', 'placeholder.method'),
            'format_request' => Yii::t('http-client/request', 'placeholder.format_request'),
            'format_response' => Yii::t('http-client/request', 'placeholder.format_response'),
            'status' => Yii::t('http-client/request', 'placeholder.status'),
            'updated_at' => Yii::t('http-client/request', 'placeholder.updated_at'),
            'created_at' => Yii::t('http-client/request', 'placeholder.created_at'),
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
     * Get value from Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value to Name
     *
     * @param $value
     * @return $this
     */
    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    /**
     * Get value from Url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set value to Url
     *
     * @param $value
     * @return $this
     */
    public function setUrl($value)
    {
        $this->url = $value;
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
     * Get value from Method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set value to Method
     *
     * @param $value
     * @return $this
     */
    public function setMethod($value)
    {
        $this->method = $value;
        return $this;
    }

    /**
     * Get value from FormatRequest
     *
     * @return string
     */
    public function getFormatRequest()
    {
        return $this->format_request;
    }

    /**
     * Set value to FormatRequest
     *
     * @param $value
     * @return $this
     */
    public function setFormatRequest($value)
    {
        $this->format_request = $value;
        return $this;
    }

    /**
     * Get value from FormatResponse
     *
     * @return string
     */
    public function getFormatResponse()
    {
        return $this->format_response;
    }

    /**
     * Set value to FormatResponse
     *
     * @param $value
     * @return $this
     */
    public function setFormatResponse($value)
    {
        $this->format_response = $value;
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
     * Get relation Response[]
     *
     * @param string $class
     * @return query\ResponseActiveQuery
     */
    public function getResponses($class = '\Response')
    {
        return $this->hasMany(static::findClass($class, __NAMESPACE__), ['request_id' => 'id']);
    }

}
