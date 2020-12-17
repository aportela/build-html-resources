<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class VueRouter extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://router.vuejs.org/",
            "LAST_VERSION" => "3.4.9",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.4.9/vue-router.js",
                        "INTEGRITY_HASH" => "sha512-k9aDZZA3EK+84lOvvFTb9Ul0bt009Qj0SOuiF1UhER2zvvlBXv2V6IsNds450ToFo4fNwsC8UgFUZj3N1rVukA=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue-router/3.4.9/vue-router.min.js",
                        "INTEGRITY_HASH" => "sha512-5zLXysUT2RHZ2FZwgnM12r3vGxRejsOtDQeYSFgJYDyDqzLTJeG2SmV87foegnnzKI/Fk9d5EdMNj+osKSpf1g=="
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
