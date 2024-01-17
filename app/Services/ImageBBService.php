<?php

namespace App\Services;

use GuzzleHttp\Client;

class ImageBBService
{
    protected $apiUrl = 'https://api.imgbb.com/1/';
    protected $apiKey;
    protected $client;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client();
    }

    public function uploadImage($imagePath)
    {
        $response = $this->client->post($this->apiUrl . 'upload', [
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


    public function deleteImage($deleteHash)
    {

        $response = $this->client->delete($this->apiUrl . 'delete/' . $deleteHash, [
            'query' => [
                'key' => $this->apiKey,
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
