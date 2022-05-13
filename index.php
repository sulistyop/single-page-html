<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = getcwd();
    
    $me = $project_location;
    
    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];
    $path = parse_url($request, PHP_URL_PATH);
    $pathFragments = explode('/', $path);
    $end = end($pathFragments);

    switch ($request) {
        case '/' :
            require $me."/view/home.php";
            break;
        case '/admin' :
            require $me."/view/admin.php";
            break;
        case'/tambah-product' :
            require $me."/view/add.php";
            break;
        case '/edit-product/'.$end :
            require $me."/view/edit.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
?>