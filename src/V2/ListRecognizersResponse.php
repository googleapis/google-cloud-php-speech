<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for the
 * [ListRecognizers][google.cloud.speech.v2.Speech.ListRecognizers] method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.ListRecognizersResponse</code>
 */
class ListRecognizersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of requested Recognizers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.Recognizer recognizers = 1;</code>
     */
    private $recognizers;
    /**
     * A token, which can be sent as
     * [page_token][google.cloud.speech.v2.ListRecognizersRequest.page_token] to
     * retrieve the next page. If this field is omitted, there are no subsequent
     * pages. This token expires after 72 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Speech\V2\Recognizer>|\Google\Protobuf\Internal\RepeatedField $recognizers
     *           The list of requested Recognizers.
     *     @type string $next_page_token
     *           A token, which can be sent as
     *           [page_token][google.cloud.speech.v2.ListRecognizersRequest.page_token] to
     *           retrieve the next page. If this field is omitted, there are no subsequent
     *           pages. This token expires after 72 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of requested Recognizers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.Recognizer recognizers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecognizers()
    {
        return $this->recognizers;
    }

    /**
     * The list of requested Recognizers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.Recognizer recognizers = 1;</code>
     * @param array<\Google\Cloud\Speech\V2\Recognizer>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecognizers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V2\Recognizer::class);
        $this->recognizers = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as
     * [page_token][google.cloud.speech.v2.ListRecognizersRequest.page_token] to
     * retrieve the next page. If this field is omitted, there are no subsequent
     * pages. This token expires after 72 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token, which can be sent as
     * [page_token][google.cloud.speech.v2.ListRecognizersRequest.page_token] to
     * retrieve the next page. If this field is omitted, there are no subsequent
     * pages. This token expires after 72 hours.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

