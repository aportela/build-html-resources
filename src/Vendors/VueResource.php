<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class VueResource extends BaseVendor
    {
        const DATA = array
        (
            "PROJECT_URL" => "https://github.com/pagekit/vue-resource",
            "LAST_VERSION" => "1.5.1",
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
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.js",
                        "INTEGRITY_HASH" => "sha512-GZgi6mLZHE1kxwBwvhZV0OayASqAwhdFIy/5T4wOxw1WaThaSEIe7ppG5WmJLwbolvMqYrqVmu2eUfm+5HNumA=="
                    ),
                    "MINIMIZED" => array(
                        "URL" => "https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js",
                        "INTEGRITY_HASH" => "sha512-wGKmIfDWUJSUvxUfUayQPJj7ADCD60La3up0VCbq+MTFcOUQ2hlH2McnYFafHgLTsOrGwOdiHKX4p1v0BerCyQ=="
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
