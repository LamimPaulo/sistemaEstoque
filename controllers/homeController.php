<?php
class homeController extends Controller {

    private $user;

    public function __contrstruct() {
        parent::__construct();

        $this->user = new Users();
        if (!$this->user->checkLogin()) {
            header("Location ".BASE_URL."login");
            exit;
        }
    }
    public function index() {
        $data = array(
            'menu' => array(
                BASE_URL.'home/add' => 'Adicionar Produto',
                BASE_URL.'relatorio' => 'Gerar Relatorio',
                BASE_URL.'login/sair' => 'Sair',


            )
        );
        $p = new Products();

        $s = '';

        if(!empty($_GET['busca'])) {
            $s = $_GET['busca'];
        }

        $data['list'] = $p->getProducts($s);

        $this->loadTemplate('home', $data);
    }

    public function add() {
        $data = array(
            'menu' => array(
            BASE_URL => 'Voltar'
        ));
        $p = new Products();
        $filters = new FiltersHelper();

        if (!empty($_POST['cod'])) {
            $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $filters->filter_post_float('price');
            $quantity = $filters->filter_post_float('quantity');
            $min_quantity = $filters->filter_post_float('min_quantity');

            if ($cod && $name && $price && $quantity && $min_quantity) {
                    $p->addProduct($cod, $name, $price, $quantity, $min_quantity);
        
                    header("Location: ".BASE_URL);
                    exit;
            } else{
                $data['warning'] = 'Digite os campos Corretamente.';
            }
        }

        $this->loadTemplate('add', $data);
    }

    public function edit($id) {
        $data = array(
            'menu' => array(
                BASE_URL => 'Voltar'
            )
        );
        $p = new Products();
        $filters = new FiltersHelper();

        if (!empty($_POST['cod'])) {
            $cod = filter_input(INPUT_POST, 'cod', FILTER_VALIDATE_INT);
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $price = $filters->filter_post_float('price');
            $quantity = $filters->filter_post_float('quantity');
            $min_quantity = $filters->filter_post_float('min_quantity');

            if ($cod && $name && $price && $quantity && $min_quantity) {
                $p->editProduct($cod, $name, $price, $quantity, $min_quantity, $id);
                
                header("Location: ".BASE_URL);
                exit;
            } else {
                $data['warning'] = 'Digite os campos Corretamente.';
            }
        }

        $data['info'] = $p->getProduct($id);

        $this->loadTemplate('edit', $data);
    }

}