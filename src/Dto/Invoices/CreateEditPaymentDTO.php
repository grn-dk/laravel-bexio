<?php

namespace CodebarAg\Bexio\Dto\Invoices;

use Spatie\LaravelData\Data;

class CreateEditPaymentDTO extends Data
{
    public string $date;
    public string $value;
    public ?int $bank_account_id = null;
    public ?int $payment_service_id = null;
    public ?bool $is_client_account_redemption = null;
    public ?bool $is_cash_discount = null;
    public ?int $kb_invoice_id = null;
    public ?int $kb_credit_voucher_id = null;
    public ?int $kb_bill_id = null;
    public ?string $kb_credit_voucher_text = null;
    public ?int $title = null;

    public function __construct(
        string $date,
        string $value,
        ?int $bank_account_id = null,
        ?int $payment_service_id = null,
        ?bool $is_client_account_redemption = null,
        ?bool $is_cash_discount = null,
        ?int $kb_invoice_id = null,
        ?int $kb_credit_voucher_id = null,
        ?int $kb_bill_id = null,
        ?string $kb_credit_voucher_text = null,
        ?int $title = null
    ) {
        $this->date = $date;
        $this->value = $value;
        $this->bank_account_id = $bank_account_id;
        $this->payment_service_id = $payment_service_id;
        $this->is_client_account_redemption = $is_client_account_redemption;
        $this->is_cash_discount = $is_cash_discount;
        $this->kb_invoice_id = $kb_invoice_id;
        $this->kb_credit_voucher_id = $kb_credit_voucher_id;
        $this->kb_bill_id = $kb_bill_id;
        $this->kb_credit_voucher_text = $kb_credit_voucher_text;
        $this->title = $title;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            date: $data['date'],
            value: $data['value'],
            bank_account_id: $data['bank_account_id'] ?? null,
            payment_service_id: $data['payment_service_id'] ?? null,
            is_client_account_redemption: $data['is_client_account_redemption'] ?? null,
            is_cash_discount: $data['is_cash_discount'] ?? null,
            kb_invoice_id: $data['kb_invoice_id'] ?? null,
            kb_credit_voucher_id: $data['kb_credit_voucher_id'] ?? null,
            kb_bill_id: $data['kb_bill_id'] ?? null,
            kb_credit_voucher_text: $data['kb_credit_voucher_text'] ?? null,
            title: $data['title'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'date' => $this->date,
            'value' => $this->value,
            'bank_account_id' => $this->bank_account_id,
            'payment_service_id' => $this->payment_service_id,
            'is_client_account_redemption' => $this->is_client_account_redemption,
            'is_cash_discount' => $this->is_cash_discount,
            'kb_invoice_id' => $this->kb_invoice_id,
            'kb_credit_voucher_id' => $this->kb_credit_voucher_id,
            'kb_bill_id' => $this->kb_bill_id,
            'kb_credit_voucher_text' => $this->kb_credit_voucher_text,
            'title' => $this->title,
        ];
    }
}
