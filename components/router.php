<?php

	class Router {

		private $routes;

		public function __construct() {
			include_once('config/routes.php');
			$this->routes = $routes;
		}

		public function run() {
			$requestedUrl = trim($_SERVER['REQUEST_URI'], '/');

            $urlFound = false; // значение по умолчанию (url не найден)
            
			foreach ($this->routes as $controller => $availableRoutes) {
				foreach ($availableRoutes as $availableRoute => $actionWithParameters) {

					if (preg_match("~$availableRoute~", $requestedUrl)) {
					// if (SITE_ROOT . $availableRoute === $requestedUrl) {
						$actionWithParameters = preg_replace("~$availableRoute~", $actionWithParameters, $requestedUrl);
						$count = 1;
						$actionWithParameters = str_replace(SITE_ROOT, '', $actionWithParameters, $count);
						$actionWithParamatersArray = explode('/', $actionWithParameters);
						$selectedController = new $controller();
						$action = array_shift($actionWithParamatersArray);
						$selectedAction = 'action' . ucfirst($action);
						call_user_func_array(array($selectedController, $selectedAction), $actionWithParamatersArray);
						$urlFound = true; // результат проверки (url найден)
                        break 2;
					}
				}
			}
            if ($urlFound === false) {
            header('Location: ' . FULL_SITE_ROOT . 'error/404');
            }
		}
	}