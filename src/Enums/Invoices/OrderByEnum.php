<?php

namespace CodebarAg\Bexio\Enums\Invoices;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ID()
 * @method static self ID_ASC()
 * @method static self ID_DESC()
 * @method static self TOTAL()
 * @method static self TOTAL_ASC()
 * @method static self TOTAL_DESC()
 * @method static self TOTAL_NET()
 * @method static self TOTAL_NET_ASC()
 * @method static self TOTAL_NET_DESC()
 * @method static self TOTAL_GROSS()
 * @method static self TOTAL_GROSS_ASC()
 * @method static self TOTAL_GROSS_DESC()
 * @method static self UPDATED_AT()
 * @method static self UPDATED_AT_ASC()
 * @method static self UPDATED_AT_DESC()
 */
final class OrderByEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'ID' => 'id',
            'ID_ASC' => 'id_asc',
            'ID_DESC' => 'id_desc',
            'TOTAL' => 'total',
            'TOTAL_ASC' => 'total_asc',
            'TOTAL_DESC' => 'total_desc',
            'TOTAL_NET' => 'total_net',
            'TOTAL_NET_ASC' => 'total_net_asc',
            'TOTAL_NET_DESC' => 'total_net_desc',
            'TOTAL_GROSS' => 'total_gross',
            'TOTAL_GROSS_ASC' => 'total_gross_asc',
            'TOTAL_GROSS_DESC' => 'total_gross_desc',
            'UPDATED_AT' => 'updated_at',
            'UPDATED_AT_ASC' => 'updated_at_asc',
            'UPDATED_AT_DESC' => 'updated_at_desc',
        ];
    }

    protected static function labels()
    {
        return [
            'ID' => 'Id',
            'ID_ASC' => 'Id Ascending',
            'ID_DESC' => 'Id Descending',
            'TOTAL' => 'Total',
            'TOTAL_ASC' => 'Total Ascending',
            'TOTAL_DESC' => 'Total Descending',
            'TOTAL_NET' => 'Total Net',
            'TOTAL_NET_ASC' => 'Total Net Ascending',
            'TOTAL_NET_DESC' => 'Total Net Descending',
            'TOTAL_GROSS' => 'Total Gross',
            'TOTAL_GROSS_ASC' => 'Total Gross Ascending',
            'TOTAL_GROSS_DESC' => 'Total Gross Descending',
            'UPDATED_AT' => 'Updated At',
            'UPDATED_AT_ASC' => 'Updated At Ascending',
            'UPDATED_AT_DESC' => 'Updated At Descending',
        ];
    }
}
