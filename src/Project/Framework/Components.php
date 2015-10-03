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
        return new \Koka\Flash\Messages($this->builder->context());
    }
}
