<?php

namespace App\Services;

use GuzzleHttp\Client;

class ImageBBService
{
    protected $apiUrl = 'https://api.imgbb.com/1/upload';
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function uploadImage($imagePath)
    {
        $client = new Client();

        $response = $client->post($this->apiUrl, [
            'multipart' => [
                [
                    'name' => 'key',
                    'contents' => $this->apiKey,
                ],
                [
                    'name' => 'image',
                    'contents' => fopen($imagePath, 'r'),
                ],
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
