<?php

namespace vendor\core; // Подключание пространства vendor\core
class Router
{
    protected static $routes = []; // Таблица маршрутов
    protected static $route = []; // Текущий маршрут
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route; // Добавляет маршруты
    }
    public static function getRoutes()
    {
        return self::$routes;
    }
    public static function getRoute()
    {
        return self::$route; // Текущий маршрут
    }
    public static function matchRoute($url)
    { // Совпадение текущего маршрута со списком маршрутов
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#$pattern#i", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }
                if (!isset($route['action'])) { // Добавление index к Контроллеру 
                    $route['action'] = 'index';
                };
                $route['controller'] =  self::upperCamelCase($route['controller']); // Преобразование первой буквы в большую
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
    /**
     * Перенаправляет URL по корректному маршруту
     * param string $url входящий URL
     * return void
     */
    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        //  echo "<pre>";print_r($url);echo "</pre>"; 
        if (self::matchRoute($url)) { // Если такой контроллер существует
            $controller = 'app\controllers\\' . self::$route['controller'] . 'Controller';
            if (class_exists($controller)) { // Если такой класс (контроллер) существует
                $cObj = new $controller(self::$route);  // Объект контроллера
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if (method_exists($cObj, $action)) { // Если у класса имеется метод action 
                    $cObj->$action();
                    $cObj->getView();
                } else {
                    include '404.html';
                    echo "Метод <b>$controller::$action</b> Не найден";
                }
            } else {
                echo "<br>";
                include '404.html';
                echo "Контроллер <b>$controller</b> Не найден";
            }
        } else {
            http_response_code(404);
            include '404.html';
        }
    }
    protected static function upperCamelCase($name)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    protected static function lowerCamelCase($name)
    {
        return lcfirst(self::upperCamelCase($name));
        // return str_replace(' ', '', ucwords(str_replace('-', ' ', $name)));
    }
    protected static function removeQueryString($url)
    {
        if ($url) {
            $params = explode('&', $url, 2);
            if (false === strpos($params[0], '=')) {
                return rtrim($params[0], '/');
            } else {
                return '';
            }
        }
    }
}
