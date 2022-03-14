<?php

namespace Dnetix\MasterPass\Model;

/**
 * This class contains various methods for to get the different values returned by Merchant Initialization Service.
 */
class MerchantInitializationResponse
{
    /**
     * Array of attributes where the key is the local name, and the value is the original name.
     * @var string[]
     */
    public static $attributeMap = [
        'OAuthToken' => 'OAuthToken',
        'ExtensionPoint' => 'MerchantInitializationResponseExtension',
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
        'o_auth_token' => 'setOAuthToken',
        'extension_point' => 'setExtensionPoint',
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
        'o_auth_token' => 'getOAuthToken',
        'extension_point' => 'getExtensionPoint',
    ];

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * $o_auth_token the Request Token (oauth_token) returned by call to the request_token API.
     * @var string
     */
    public $OAuthToken;

    /**
     * $extension_point the ExtensionPoint for DSRP/future enhancement.
     * @var MerchantInitializationResponseExtension
     */
    public $ExtensionPoint;

    /**
     * Constructor.
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->OAuthToken = isset($data['OAuthToken']) ? $data['OAuthToken'] : '';
            $this->ExtensionPoint = isset($data['ExtensionPoint']) ? $data['ExtensionPoint'] : '';
        }
    }

    /**
     * Gets o_auth_token.
     * @return string
     */
    public function getOAuthToken()
    {
        return $this->OAuthToken;
    }

    /**
     * Sets o_auth_token.
     * @param string $o_auth_token the Request Token (oauth_token) returned by call to the request_token API.
     * @return $this
     */
    public function setOAuthToken($o_auth_token)
    {
        $this->OAuthToken = $o_auth_token;
        return $this;
    }

    /**
     * Gets extension_point.
     * @return MerchantInitializationResponseExtension
     */
    public function getExtensionPoint()
    {
        return $this->ExtensionPoint;
    }

    /**
     * Sets extension_point.
     * @param MerchantInitializationResponseExtension $extension_point the ExtensionPoint for DSRP/future enhancement.
     * @return $this
     */
    public function setExtensionPoint($extension_point)
    {
        $this->ExtensionPoint = $extension_point;
        return $this;
    }
}
