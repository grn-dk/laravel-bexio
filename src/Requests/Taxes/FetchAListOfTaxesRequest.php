<?php

namespace CodebarAg\Bexio\Requests\Taxes;

use CodebarAg\Bexio\Dto\Taxes\TaxDTO;
use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class FetchAListOfTaxesRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(
        readonly int $limit = 2000,
        readonly int $offset = 0,
        readonly ?string $scope = null,
        readonly ?string $date = null,
        readonly ?string $types = null,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/3.0/taxes';
    }

    public function defaultQuery(): array
    {
        $query = [
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];

        if ($this->scope) {
            $query['scope'] = $this->scope;
        }

        if ($this->date) {
            $query['date'] = $this->date;
        }

        if ($this->types) {
            $query['types'] = $this->types;
        }

        return $query;
    }

    public function createDtoFromResponse(Response $response): mixed
    {
        if (! $response->successful()) {
            throw new Exception('Request was not successful. Unable to create DTO.');
        }

        $res = $response->json();

        $taxes = collect();

        foreach ($res as $currency) {
            $taxes->push(TaxDTO::fromArray($currency));
        }

        return $taxes;
    }
}
