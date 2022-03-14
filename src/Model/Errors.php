<?php

namespace Dnetix\MasterPass\Model;

class Errors
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     * @var string[]
     */
    public static $attributeMap = [
        'Error' => 'Error',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     * @var string[]
     */
    public static $setters = [
        'error' => 'setError',
    ];

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     * @var string[]
     */
    public static $getters = [
        'error' => 'getError',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * $error.
     * @var Error[]
     */
    public $Error;

    /**
     * Constructor.
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->Error = $data['Error'];
        }
    }

    /**
     * Gets error.
     * @return Error[]
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Sets error.
     * @param Error[] $error
     * @return $this
     */
    public function setError($error)
    {
        $this->Error = $error;
        return $this;
    }
}
