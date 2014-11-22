<?php
class SmartyTestController extends BaseController 
{
    public function index
    {}
        $view = new MySmarty();
        $data['html'] = file_get_contents('http://google.co.jp');
        $view->assign($data);
        return $view->fetch('test/index.tpl.html');
    }
}

