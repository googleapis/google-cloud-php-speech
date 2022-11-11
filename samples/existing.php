<?php

require __DIR__ . '/../vendor/autoload.php';

// The existing signature promotes required fields as their own
// individual parameters. Any optional fields are passed in to
// an array, which exists as the final parameter.

// Import relevant classes.
use Google\ApiCore\ApiException;
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

// Deliver the request.
try {
    $operation = $client->longRunningRecognize($config, $audio, [
        'outputConfig' => $outputConfig
    ]);
    // Handle the operation as needed.
} catch (ApiException $ex) {
    printf('Call failed with message: %s', $ex->getMessage());
}