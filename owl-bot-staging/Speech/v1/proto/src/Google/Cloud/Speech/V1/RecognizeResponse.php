<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The only message returned to the client by the `Recognize` method. It
 * contains the result as zero or more sequential `SpeechRecognitionResult`
 * messages.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.RecognizeResponse</code>
 */
class RecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     */
    private $results;
    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_time = 3;</code>
     */
    protected $total_billed_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1\SpeechRecognitionResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           Sequential list of transcription results corresponding to
     *           sequential portions of audio.
     *     @type \Google\Protobuf\Duration $total_billed_time
     *           When available, billed audio seconds for the corresponding request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sequential list of transcription results corresponding to
     * sequential portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.SpeechRecognitionResult results = 2;</code>
     * @param \Google\Cloud\Speech\V1\SpeechRecognitionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\SpeechRecognitionResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_time = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTotalBilledTime()
    {
        return $this->total_billed_time;
    }

    public function hasTotalBilledTime()
    {
        return isset($this->total_billed_time);
    }

    public function clearTotalBilledTime()
    {
        unset($this->total_billed_time);
    }

    /**
     * When available, billed audio seconds for the corresponding request.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_billed_time = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTotalBilledTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->total_billed_time = $var;

        return $this;
    }

}

