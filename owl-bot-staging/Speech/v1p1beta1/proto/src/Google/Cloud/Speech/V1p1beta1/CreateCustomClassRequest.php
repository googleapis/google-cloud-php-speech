<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message sent by the client for the `CreateCustomClass` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.CreateCustomClassRequest</code>
 */
class CreateCustomClassRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this custom class will be created.
     * Format:
     * `projects/{project}/locations/{location}/customClasses`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The ID to use for the custom class, which will become the final
     * component of the custom class' resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string custom_class_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $custom_class_id = '';
    /**
     * Required. The custom class to create.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.CustomClass custom_class = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $custom_class = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this custom class will be created.
     *           Format:
     *           `projects/{project}/locations/{location}/customClasses`
     *           Speech-to-Text supports three locations: `global`, `us` (US North America),
     *           and `eu` (Europe). If you are calling the `speech.googleapis.com`
     *           endpoint, use the `global` location. To specify a region, use a
     *           [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     *           with matching `us` or `eu` location value.
     *     @type string $custom_class_id
     *           Required. The ID to use for the custom class, which will become the final
     *           component of the custom class' resource name.
     *           This value should be 4-63 characters, and valid characters
     *           are /[a-z][0-9]-/.
     *     @type \Google\Cloud\Speech\V1p1beta1\CustomClass $custom_class
     *           Required. The custom class to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this custom class will be created.
     * Format:
     * `projects/{project}/locations/{location}/customClasses`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this custom class will be created.
     * Format:
     * `projects/{project}/locations/{location}/customClasses`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the custom class, which will become the final
     * component of the custom class' resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string custom_class_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomClassId()
    {
        return $this->custom_class_id;
    }

    /**
     * Required. The ID to use for the custom class, which will become the final
     * component of the custom class' resource name.
     * This value should be 4-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string custom_class_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomClassId($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_class_id = $var;

        return $this;
    }

    /**
     * Required. The custom class to create.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.CustomClass custom_class = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V1p1beta1\CustomClass|null
     */
    public function getCustomClass()
    {
        return $this->custom_class;
    }

    public function hasCustomClass()
    {
        return isset($this->custom_class);
    }

    public function clearCustomClass()
    {
        unset($this->custom_class);
    }

    /**
     * Required. The custom class to create.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1p1beta1.CustomClass custom_class = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V1p1beta1\CustomClass $var
     * @return $this
     */
    public function setCustomClass($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1p1beta1\CustomClass::class);
        $this->custom_class = $var;

        return $this;
    }

}

