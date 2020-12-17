<?php

    namespace aportela\BuildHTMLResources\Vendors;

    class BaseVendor implements InterfaceVendor
    {
        private $data = array
        (
            "PROJECT_URL" => null,
            "LAST_VERSION" => null,
            "HAS_STYLES" => false,
            "HAS_SCRIPTS" => false,
            "CSS_RESOURCES" => array
            (
                array
                (
                    "NORMAL" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null,
                    )
                )
            ),
            "JS_RESOURCES" => array(
                array(
                    "NORMAL" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null
                    ),
                    "MINIMIZED" => array
                    (
                        "URL" => null,
                        "INTEGRITY_HASH" => null,
                    )
                )
            )
        );

        public function setData(array $value): void
        {
            $this->data = $value;
        }

        public function hasStyles(): bool
        {
            return(isset($this->data["HAS_STYLES"]) ? $this->data["HAS_STYLES"]: false);
        }

        public function hasScripts(): bool
        {
            return(isset($this->data["HAS_SCRIPTS"]) ? $this->data["HAS_SCRIPTS"]: false);
        }

        private function getResourceURL(array $resource, bool $minimized): string
        {
            return($minimized ? (isset($resource["MINIMIZED"]["URL"]) ? $resource["MINIMIZED"]["URL"]: null): (isset($resource["NORMAL"]["URL"]) ? $resource["NORMAL"]["URL"]: null));
        }

        private function getResourceHash(array $resource, bool $minimized): string
        {
            return($minimized ? (isset($resource["MINIMIZED"]["INTEGRITY_HASH"]) ? $resource["MINIMIZED"]["INTEGRITY_HASH"]: null): (isset($resource["NORMAL"]["INTEGRITY_HASH"]) ? $resource["NORMAL"]["INTEGRITY_HASH"]: null));
        }

        public function getStyleURLs(bool $minimized = true): array
        {
            if ($this->hasStyles())
            {
                $items = array();
                if (isset($this->data["CSS_RESOURCES"])) {
                    foreach($this->data["CSS_RESOURCES"] as $resource)
                    {
                        array_push($items, $this->getResourceURL($resource, $minimized));
                    }
                    return($items);
                }
                else
                {
                    throw new \Exception("Invalid vendor data (CSS_RESOURCES not found");
                }
            }
            else
            {
                return([]);
            }
        }

        public function getStyleTags(bool $minimized = true, bool $withIntegrityHash = false): array
        {
            if ($this->hasStyles())
            {
                $items = array();
                if (isset($this->data["CSS_RESOURCES"])) {
                    foreach($this->data["CSS_RESOURCES"] as $resource)
                    {
                        if ($withIntegrityHash)
                        {
                            array_push($items, sprintf("<link rel=\"stylesheet\" href=\"%s\" integrity=\"%s\" crossorigin=\"anonymous\" />", $this->getResourceURL($resource, $minimized), $this->getResourceHash($resource, $minimized)));
                        }
                        else
                        {
                            array_push($items, sprintf("<link rel=\"stylesheet\" href=\"%s\" />", $this->getResourceURL($resource, $minimized)));
                        }
                    }
                    return($items);
                }
                else
                {
                    throw new \Exception("Invalid vendor data (CSS_RESOURCES not found");
                }
            }
            else
            {
                return([]);
            }
        }

        public function getScriptURLs(bool $minimized = true): array
        {
            if ($this->hasScripts())
            {
                $items = array();
                if (isset($this->data["JS_RESOURCES"])) {
                    foreach($this->data["JS_RESOURCES"] as $resource)
                    {
                        array_push($items, $this->getResourceURL($resource, $minimized));
                    }
                    return($items);
                }
                else
                {
                    throw new \Exception("Invalid vendor data (JS_RESOURCES not found");
                }
            }
            else
            {
                return([]);
            }
        }

        public function getScriptTags(bool $minimized = true, bool $withIntegrityHash = false): array
        {
            if ($this->hasScripts())
            {
                $items = array();
                if (isset($this->data["JS_RESOURCES"])) {
                    foreach($this->data["JS_RESOURCES"] as $resource)
                    {
                        if ($withIntegrityHash)
                        {
                            array_push($items, sprintf("<script src=\"%s\" integrity=\"%s\" crossorigin=\"anonymous\"></script>", $this->getResourceURL($resource, $minimized), $this->getResourceHash($resource, $minimized)));
                        }
                        else
                        {
                            array_push($items, sprintf("<script src=\"%s\"></script>", $this->getResourceURL($resource, $minimized)));
                        }
                    }
                    return($items);
                }
                else
                {
                    throw new \Exception("Invalid vendor data (CSS_RESOURCES not found");
                }
            }
            else
            {
                return([]);
            }
        }
    }

?>
