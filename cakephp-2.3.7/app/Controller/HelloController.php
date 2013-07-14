<?php
App::uses('AppController', 'Controller');
class HelloController extends AppController {
    public $uses = array();

    public function index($name = null) {
        $this->set('name', $name);
    }
}
