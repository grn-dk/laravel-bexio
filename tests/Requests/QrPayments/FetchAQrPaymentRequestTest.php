<?php

use CodebarAg\Bexio\BexioConnector;
use CodebarAg\Bexio\Requests\BankAccounts\FetchAListOfBankAccountsRequest;
use CodebarAg\Bexio\Requests\QrPayments\GetQrPaymentRequest;
use Illuminate\Support\Collection;
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Http\Faking\MockClient;

it('can perform the request', closure: function () {
    //    $mockClient = new MockClient([
    //        FetchAListOfBankAccountsRequest::class => MockResponse::fixture('BankAccounts/fetch-a-list-of-bank-accounts'),
    //    ]);

    $connector = new BexioConnector;
    //    $connector->withMockClient($mockClient);

    $response = $connector->send(new GetQrPaymentRequest(
        bank_account_id: 1,
        payment_id: 1
    ));

    ray($response->json());
    ray($response->dto());

    //    $mockClient->assertSent(FetchAListOfBankAccountsRequest::class);

    expect($response->dto())->toBeInstanceOf(Collection::class)
        ->and($response->dto()->count())->toBe(2);
});
