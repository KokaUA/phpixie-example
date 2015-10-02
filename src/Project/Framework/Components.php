<?php

namespace Project\Framework;

class Components extends \PHPixie\BundleFramework\Components
{
    public function flash()
    {
        return $this->instance('flash');
    }

    protected function buildFlash()
    {
        $http = $this->http();
        $container = $http->contextContainer($http->context($http->request()));
        return new \Koka\Flash\Messages($container);
    }
}
