<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class Bootstrap extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://getbootstrap.com/",
            "LAST_VERSION" => "4.5.3",
            "HAS_STYLES" => true,
            "HAS_SCRIPTS" => true,
            "CSS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.css",
                        "INTEGRITY_HASH" => "sha512-drnvWxqfgcU6sLzAJttJv7LKdjWn0nxWCSbEAtxJ/YYaZMyoNLovG7lPqZRdhgL1gAUfa+V7tbin8y+2llC1cw=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css",
                        "INTEGRITY_HASH" => "sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g=="
                    )
                )
            ),
            "JS_RESOURCES" => array(
                array(
                    "NORMAL" => array (
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.js",
                        "INTEGRITY_HASH" => "sha512-KCgUnRzizZDFYoNEYmnqlo0PRE6rQkek9dE/oyIiCExStQ72O7GwIFfmPdkzk4OvZ/sbHKSLVeR4Gl3s7s679g=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js",
                        "INTEGRITY_HASH" => "sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw=="
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
