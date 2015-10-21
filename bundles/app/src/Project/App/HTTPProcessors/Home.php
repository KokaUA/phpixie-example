<?php

namespace Project\App\HTTPProcessors;

class Home extends DefaultAction
{
    public function indexAction()
    {
        return $this->template->render('app:home/index', ['flash' => $this->flash]);
    }
}
