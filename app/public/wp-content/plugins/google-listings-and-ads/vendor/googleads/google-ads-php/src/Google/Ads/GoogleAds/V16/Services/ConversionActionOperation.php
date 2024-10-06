<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/conversion_action_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, update, remove) on a conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.ConversionActionOperation</code>
 */
class ConversionActionOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V16\Resources\ConversionAction $create
     *           Create operation: No resource name is expected for the new conversion
     *           action.
     *     @type \Google\Ads\GoogleAds\V16\Resources\ConversionAction $update
     *           Update operation: The conversion action is expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed conversion action is
     *           expected, in this format:
     *           `customers/{customer_id}/conversionActions/{conversion_action_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\ConversionActionService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Create operation: No resource name is expected for the new conversion
     * action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionAction create = 1;</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\ConversionAction|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new conversion
     * action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionAction create = 1;</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\ConversionAction $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\ConversionAction::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The conversion action is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionAction update = 2;</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\ConversionAction|null
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(2);
    }

    /**
     * Update operation: The conversion action is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionAction update = 2;</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\ConversionAction $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\ConversionAction::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed conversion action is
     * expected, in this format:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    public function hasRemove()
    {
        return $this->hasOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed conversion action is
     * expected, in this format:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

