<?php

namespace Project\App\HTTPProcessors;

class Home extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * @var \PHPixie\Template
     */
    protected $template;

    /**
     * @var \Koka\Flash\Messages
     */
    protected $flash;

    public function __construct($components)
    {
        $this->template = $components->template();
        $this->flash    = $components->flash();
    }

    public function indexAction()
    {
        return $this->template->render('app:home/index');
    }
}
