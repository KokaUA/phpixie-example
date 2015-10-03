<?php

namespace Admin\App\HTTPProcessors;

class Home extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    protected $template;
    
    public function __construct($template)
    {
        $this->template = $template;
    }
    
    public function act1Action($request)
    {
        return $this->template->render('admin:act1');
    }

    public function act2Action($request)
    {
        return $this->template->render('admin:act2');
    }

    public function act3Action($request)
    {
        return $this->template->render('admin:act3');
    }

    public function indexAction($request)
    {
        return $this->template->render('admin:index');
    }
}
