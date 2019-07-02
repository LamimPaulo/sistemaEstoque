<?php
class RelatorioController extends Controller {

    public function __contrstruct() {
        parent::__construct();

        $this->user = new Users();
        if (!$this->user->checkLogin()) {
            header("Location ".BASE_URL."login");
            exit;
        }
    }

    public function index() {
        $data = array();
        $p = new Products();

        $data['list'] = $p->getLowQuantityProducts();
        
        $this->loadTemplate('relatorio', $data);

    }

}