<?php

namespace Ilmala\Archivium\Transporter;

use Illuminate\Http\Client\Factory as HttpFactory;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class Transporter
{
    protected string $category = '';

    protected string $baseUrl = 'https://test.archivium-srl.it/ArchiHub/public/';

    protected PendingRequest $request;

    private string $userId;

    protected string $apiKey;


    public function __construct()
    {
        $this->userId = config('archivium-api.userId');
        $this->apiKey = config('archivium-api.apiKey');

        $http = new HttpFactory;

        $this->request = $http->baseUrl(
            $this->getBaseUrl()
        );
    }

    public static function build()
    {
        $instance = new static();
        return $instance->request;
    }

    /**
     * @return string
     */
    protected function getBaseUrl(): string
    {
        return $this->baseUrl . $this->category . '/' . $this->userId . '/' . $this->apiKey . '/';
    }
}
