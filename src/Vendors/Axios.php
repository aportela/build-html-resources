<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Axios extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://github.com/axios/axios",
            "LAST_VERSION" => "0.21.0",
            "HAS_STYLES" => false,
            "HAS_SCRIPTS" => true,
            "CSS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    ),
                    "MINIMIZED" => array(
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    )
                )
            ),
            "JS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.js",
                        "INTEGRITY_HASH" => "sha512-bYkaBWaFtfPIMYt9+CX/4DWgfrjcHinjerNYxQmQx1VM76eUsPPKZa5zWV8KksVkBF/DaHSADCwil2J5Uq2ctA=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js",
                        "INTEGRITY_HASH" => "sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ=="
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
