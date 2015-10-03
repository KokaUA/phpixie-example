<?php

namespace Admin\App;

class HTTPProcessor extends \PHPixie\DefaultBundle\Processor\HTTP\Builder
{
    protected $builder;
    protected $attribute = 'processor';
    
    public function __construct($builder)
    {
        $this->builder = $builder;
    }
    
    protected function buildHomeProcessor()
    {
        $components = $this->builder->components();
        
        return new HTTPProcessors\Home(
            $components->template()    
        );
    }
}
