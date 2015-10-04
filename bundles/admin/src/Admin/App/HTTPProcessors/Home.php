<?php

namespace Admin\App\HTTPProcessors;

class Home extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    protected $template;

    public function __construct($components)
    {
        $this->template = $components->template();
    }
    
    public function indexAction()
    {
        return $this->template->render('admin:home/index');
    }
}
