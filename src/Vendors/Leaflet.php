<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Leaflet extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://leafletjs.com/",
            "LAST_VERSION" => "1.7.1",
            "HAS_STYLES" => true,
            "HAS_SCRIPTS" => true,
            "CSS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css",
                        "INTEGRITY_HASH" => "sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.css",
                        "INTEGRITY_HASH" => "sha512-1xoFisiGdy9nvho8EgXuXvnpR5GAMSjFwp40gSRE3NwdUdIMIKuPa7bqoUhLD0O/5tPNhteAsE5XyyMi5reQVA=="
                    )
                )
            ),
            "JS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js",
                        "INTEGRITY_HASH" => "sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js",
                        "INTEGRITY_HASH" => "sha512-SeiQaaDh73yrb56sTW/RgVdi/mMqNeM2oBwubFHagc5BkixSpP1fvqF47mKzPGWYSSy4RwbBunrJBQ4Co8fRWA=="
                    )
                )
            )
        );

        public function __construct()
        {
            $this->setData(self::DATA);
        }
    }

?>
