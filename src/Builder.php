<?php

    namespace aportela\BuildHTMLResources;

    class Builder
    {
        private $vendors = array();

        public function __construct(array $requiredVendors)
        {
            $this->vendors = $requiredVendors;
        }

        public function __destruct()
        {
        }

        public function getStyleTags(bool $minimized = true, bool $withIntegrityHash = false)
        {
            $styles = array();
            foreach($this->vendors as $vendor)
            {
                if ($vendor->hasStyles())
                {
                    $styles = array_merge($styles, $vendor->getStyleTags($minimized, $withIntegrityHash));
                }
            }
            return($styles);
        }

        public function getScriptTags(bool $minimized = true, bool $withIntegrityHash = false)
        {
            $scripts = array();
            foreach($this->vendors as $vendor)
            {
                if ($vendor->hasStyles())
                {
                    $scripts = array_merge($scripts, $vendor->getScriptTags($minimized, $withIntegrityHash));
                }
            }
            return($scripts);
        }
    }

?>
