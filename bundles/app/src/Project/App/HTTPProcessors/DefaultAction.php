<?php

namespace Project\App\HTTPProcessors;

abstract class DefaultAction extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * @var \PHPixie\Template
     */
    protected $template;

    /**
     * @var \Koka\Flash\Messages
     */
    protected $flash;

    protected $builder;

    public function __construct($builder)
    {
        $this->builder = $builder;
        $this->template = $builder->components()->template();
        $this->flash = $builder->components()->flash();
    }
}
