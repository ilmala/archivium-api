<?php

namespace Ilmala\Archivium\Resources;

use Illuminate\Support\Collection;
use Ilmala\Archivium\DataTransferObject\Enterprise as EnterpriseDataObject;
use Ilmala\Archivium\Transporter\AdminTransporter;

class Enterprise
{
    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function view(string $id): EnterpriseDataObject
    {
        $url = "Enterprises/view/{$id}";

        $response = AdminTransporter::build()->get($url);

        if ($response->failed()) {
            throw $response->toException();
        }

        return EnterpriseDataObject::createFromArray(
            $response->collect()->first()
        );
    }

    /**
     * @throws \Illuminate\Http\Client\RequestException
     */
    public function list(): Collection
    {
        $url = "Enterprises/list";

        $response = AdminTransporter::build()->get($url);

        if ($response->failed()) {
            throw $response->toException();
        }

        return $response->collect()->map(function ($item) {
            return EnterpriseDataObject::createFromArray($item);
        });
    }
}
