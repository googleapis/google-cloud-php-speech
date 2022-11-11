<?php

require __DIR__ . '/../vendor/autoload.php';

// The new signature no longer promotes required fields as seperate parameters.
// Instead, a single request message instance is passed in which will have all
// configurable fields assigned to it.
// 
// "send" is prefixed to the existing method's name in order to support
// both the old and new approaches simultaneously.

// Import relevant classes.
use Google\ApiCore\ApiException;
use Google\Cloud\Speech\V1\LongRunningRecognizeRequest;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\TranscriptOutputConfig;

// Create the client.
$client = new SpeechClient();

// Prepare any request options.
$config = (new RecognitionConfig())
    ->setLanguageCode('en-US')
    ->setSampleRateHertz(44100)
    ->setEncoding(AudioEncoding::FLAC);
$audio = (new RecognitionAudio())
    ->setUri('gs://cloud-samples-data/speech/brooklyn_bridge.flac');
$outputConfig = (new TranscriptOutputConfig())
    ->setGcsUri('gs://output_bucket/output_object');

// Prepare the request object.
$request = (new LongRunningRecognizeRequest())
    ->setConfig($config)
    ->setAudio($audio)
    ->setOutputConfig($outputConfig);

// Deliver the request.
try {
    $operation = $client->sendLongRunningRecognize($request);
    // Handle the operation as needed.
} catch (ApiException $ex) {
    printf('Call failed with message: %s', $ex->getMessage());
}
