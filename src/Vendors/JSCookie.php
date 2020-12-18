<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class JSCookie extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://github.com/js-cookie/js-cookie",
            "LAST_VERSION" => "2.2.1",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.js",
                        "INTEGRITY_HASH" => "sha512-JjYSgzqo9K0IeYGEslMRYE8aO9tq7Ky3EQNmEVkAe6Cp14AwlJMLMnb0fpgEkr3YxJ8ghQiriOvZwIdRZieGIQ=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js",
                        "INTEGRITY_HASH" => "sha512-Meww2sXqNHxI1+5Dyh/9KAtvI9RZSA4c1K2k5iL02oiPO/RH3Q30L3M1albtqMg50u4gRTYdV4EXOQqXEI336A=="
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
