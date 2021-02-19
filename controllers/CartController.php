<?php

	class CartController {

		private $bookModel; 

		public function __construct() {
			$this->bookModel = new Book();
		}


		public function actionIndex() {
			$title = 'Корзина';
			$books = [];
			if (isset($_COOKIE['cart'])) {
				$cart = json_decode($_COOKIE['cart'], true);
				$ids = array_keys($cart);
				$booksInfo = $this->bookModel->getCartInfo($ids);
				foreach ($booksInfo as &$book) {
					$book['book_quantity'] = $cart[$book['book_id']];
				}
				$books = $booksInfo;
			}
			include_once('views/cart/index.php');
			return;
		}
	}