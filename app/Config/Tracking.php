<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * Google Ads conversion tracking.
 *
 * Every value can be overridden from .env, e.g.:
 *   tracking.adsId             = AW-XXXXXXXXXX
 *   tracking.labelWhatsapp     = AbCdEfGhIjK
 *   tracking.labelEmail        = AbCdEfGhIjK
 *   tracking.labelContactForm  = AbCdEfGhIjK
 *
 * While adsId is empty, no Ads tag is loaded and only GA4 events are sent.
 * An empty label skips the Ads conversion for that action.
 */
class Tracking extends BaseConfig
{
    /**
     * Google Ads conversion ID (AW-...). [VERİ GEREKLİ]
     */
    public string $adsId = '';

    /**
     * Conversion labels per action. [VERİ GEREKLİ]
     */
    public string $labelWhatsapp    = '';
    public string $labelEmail       = '';
    public string $labelContactForm = '';
}
