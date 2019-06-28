<?php
class homeController extends Controller {

    private $user;

    public function __contrstruct() {
        parent::__construct();

        $this->user = new Users();
        if ($this->user->checkLogin()) {
            
        }
    }
    public function index() {
        $data = array();

        $this->loadTemplate('home', $data);
    }

}