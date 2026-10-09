<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Pizza box liner specifications shown on product pages and in Product schema.
 *
 * A row whose value is null is NOT rendered and NOT added to schema.
 * Fill a value only with confirmed data from Yıldırım Ofset — never estimate.
 * Always give both metric and imperial where a dimension is involved.
 */
class ProductSpecs extends BaseConfig
{
    /**
     * Standard liner size in centimetres, used for schema width/depth.
     */
    public array $standardSizeCm = ['width' => 29, 'depth' => 29];

    /**
     * label => value (null = [VERİ GEREKLİ], hidden until provided)
     */
    public array $rows = [
        'Standard size'           => '29 × 29 cm (11.4 × 11.4 in)',
        'Other sizes'             => null, // [VERİ GEREKLİ] list in cm + in
        'Material'                => null, // [VERİ GEREKLİ]
        'Paper weight'            => null, // [VERİ GEREKLİ] g/m² (gsm)
        'Flute type'              => null, // [VERİ GEREKLİ] e.g. corrugated / waveflute
        'Grease resistance'       => null, // [VERİ GEREKLİ]
        'Units per carton'        => null, // [VERİ GEREKLİ]
        'Minimum order quantity'  => null, // [VERİ GEREKLİ]
        'Production lead time'    => null, // [VERİ GEREKLİ]
        'Shipping'                => null, // [VERİ GEREKLİ]
    ];

    /**
     * Rows that have confirmed values.
     */
    public function available(): array
    {
        return array_filter($this->rows, static fn ($value) => $value !== null && $value !== '');
    }
}
