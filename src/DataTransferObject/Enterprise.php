<?php

namespace Ilmala\Archivium\DataTransferObject;

class Enterprise
{
    public string $id;
    public string $type;
    public string $personCode;
    public string $vatCode;
    public string $companyName;
    public string $lastName;
    public string $firstName;
    public string $address;
    public string $addressNumber;
    public string $postalCode;
    public string $city;
    public string $state;
    public string $country;
    public string $pec;
    public string $email;
    public ?string $externalId;

    public function __construct(
        string $id,
        string $type,
        string $personCode,
        string $vatCode,
        string $companyName,
        string $lastName,
        string $firstName,
        string $address,
        string $addressNumber,
        string $postalCode,
        string $city,
        string $state,
        string $country,
        string $pec,
        string $email,
        string $externalId = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->personCode = $personCode;
        $this->vatCode = $vatCode;
        $this->companyName = $companyName;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->address = $address;
        $this->addressNumber = $addressNumber;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->pec = $pec;
        $this->email = $email;
        $this->externalId = $externalId;
    }

    public static function createFromArray(array $attributes): self
    {
        return new static(
            $attributes['ID'],
            $attributes['TipoGiuridico'],
            $attributes['CodiceFiscale'],
            $attributes['PartitaIva'],
            $attributes['RagioneSociale'],
            $attributes['Cognome'],
            $attributes['Nome'],
            $attributes['Indirizzo'],
            $attributes['NumeroCivico'],
            $attributes['ZipCode'],
            $attributes['Localita'],
            $attributes['Provincia'],
            $attributes['Stato'],
            $attributes['Pec'],
            $attributes['Mail'],
            $attributes['ExtID']
        );
    }
}
