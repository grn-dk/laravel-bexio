<?php

namespace CodebarAg\Bexio\Dto\Invoices;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Arr;
use Saloon\Http\Response;
use Spatie\LaravelData\Data;

class CreateEditInvoiceDTO extends Data
{
    public function __construct(
        public int $contact_id,
        public int $user_id,
        public int $language_id,
        public int $bank_account_id,
        public int $currency_id,
        public int $payment_type_id,
        public string $header,
        public string $footer,
        public int $mwst_type,
        public bool $mwst_is_net,
        public bool $show_position_taxes,
        public string $is_valid_from,
        public ?string $is_valid_to = null,
        public ?string $template_slug = null,
    ) {
    }

		public static function fromResponse(Response $response): self
    {
        if ($response->failed()) {
            throw new \Exception('Failed to create DTO from Response');
        }

        $data = $response->json();

        return self::fromArray($data);
    }

    public static function fromArray(array $data): self
    {
        if (!$data) {
            throw new Exception('Unable to create DTO. Data missing from array.');
        }

        return new self(
            contact_id: Arr::get($data, 'contact_id'),
            user_id: Arr::get($data, 'user_id'),
            language_id: Arr::get($data, 'language_id'),
            bank_account_id: Arr::get($data, 'bank_account_id'),
            currency_id: Arr::get($data, 'currency_id'),
            payment_type_id: Arr::get($data, 'payment_type_id'),
            header: Arr::get($data, 'header'),
            footer: Arr::get($data, 'footer'),
            mwst_type: Arr::get($data, 'mwst_type'),
            mwst_is_net: Arr::get($data, 'mwst_is_net', false),
            show_position_taxes: Arr::get($data, 'show_position_taxes', false),
            is_valid_from: Arr::get($data, 'is_valid_from'),
            is_valid_to: Arr::get($data, 'is_valid_to'),
            template_slug: Arr::get($data, 'template_slug'),
        );
    }
}
