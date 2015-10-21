<?php

namespace Project\App;

class Builder extends \PHPixie\DefaultBundle\Builder
{
    protected function buildHttpProcessor()
    {
        return new HTTPProcessor($this);
    }

    protected function buildORMWrappers()
    {
        return new ORMWrappers($this);
    }

    public function bundleName()
    {
        return 'app';
    }

    protected function getRootDirectory()
    {
        return realpath(__DIR__ . '/../../../');
    }
}
