<?php

    class ProductController {

        private $productModel;
        public $accessLevel;

		public function __construct() {
			$this->productModel = new Product();
		}
        
        public function actionIndex($category, $page = 1) {
            switch($category) {
                case 'Ryukzaki' : 
                    $title = 'Рюкзаки';
                    break;
                    
                case 'Snaryazhenie' : 
                    $title = 'Снаряжение';
                    break;
                
                case 'Odezhda' : 
                    $title = 'Одежда';
                    break;
                
                case 'Obuv' : 
                    $title = 'Обувь';
                    break;    
            }
            
            $page = explode('?', $page)[0];
            $page = count(explode('=', $page)) === 1 ? $page : explode('=', $page)[1];
            $filter = isset($_GET['filter']) ? $_GET['filter'] : '';
            $limit = 3;
            $offset = $limit * ($page -1);
            $info = $this->productModel->getAllProducts($category, $limit, $offset);
            $products = $info['data'];
            $totalCount = $info['count'];
            $pagination = new Pagination($totalCount, $page, $limit, 'page=');
            $prices = array(
                // array('name' => 'Цена', 'id' => '')
                'values' => array(3999, 10999),
                'range' => array(999, 15000)
            );
            include_once('views/product/index.php');
            return;
            
        }
        
        public function actionView($id) {
            $title = '';
            $product = $this->productModel->getProductById($id);
            $product['photo_path'] = explode(',', $product['photo_paths']);
            include_once('views/product/view.php');
            //print_r($product);
			return;
        }
        
        public function actionAdd() {
            echo 'Вызван метод actionAdd в ProductController';
            return;
        }
        
        
        public function actionList($page = 1) {
            $limit = 6;
            $offset = $limit * ($page - 1);
            $info = $this->productModel->getAll($limit, $offset);
            $products = $info['data'];
            $totalCount = $info['count'];
            $pagination = new Pagination($totalCount, $page, $limit, 'page=');
            include_once('views/admin/products/list.php');
            return;
        }
    
      }