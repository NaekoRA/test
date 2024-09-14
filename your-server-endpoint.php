if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process POST request
} else {
    // Handle other methods or return error
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'Method Not Allowed';
    exit;
}
