<?php

namespace Project\App\HTTPProcessors;

class Greet extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
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

    public function defaultAction($request)
    {
        // add test info message
        $this->flash->info('Test info message');

        $container = $this->template->get('app:greet');
        $container->message = "Have fun coding!";
        $container->flash = $this->flash;
        return $container;
    }
}
