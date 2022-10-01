<?php

namespace App\Controller;

class BlogsController extends AppController{

    public function home()
    {
        $this->loadModel('Projects');
        $tabs = $this->Projects->find('all');
        $this->set('tab',$tabs);
        $this->viewBuilder()->disableAutoLayout();
    }
}
