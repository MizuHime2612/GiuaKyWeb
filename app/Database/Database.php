<?php


class Database {
    private static $connection;

    public static function getConnection() {
        if (self::$connection == null) {
            $uri = "";
            $fields = parse_url($uri);
            
            // Build the DSN including SSL settings
            $conn = "mysql:";
            $conn .= "host=" . $fields["host"];
            $conn .= ";port=" . $fields["port"];
            $conn .= ";dbname=" . ltrim($fields["path"], '/');
            
            $options = [
                PDO::MYSQL_ATTR_SSL_CA => '/path/to/ca.pem', // Ensure this path is correct
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                self::$connection = new PDO($conn, $fields["user"], $fields["pass"], $options);
            } catch (Exception $e) {
                error_log("Database connection error: " . $e->getMessage());
                echo "Error: " . $e->getMessage();
                exit;
            }
        }
        return self::$connection;
    }
}
?>
