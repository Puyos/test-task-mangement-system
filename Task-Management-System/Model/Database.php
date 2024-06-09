<?php


class Database {
    
    protected $connection;
    protected $statement;

    private $server = [
        'host' => 'localhost',
        'port' => '3306',
        'dbname' => 'management_system',
    ];
    
    public function __construct( $username = 'root', $password = 'password' )
    {
        $dsn = 'mysql:' .http_build_query($this->server, '', ';');

        $this->connection = new PDO($dsn, $username, $password);

    }

    public function query( $statement, $param = [] )
    {
        $this->statement = $this->connection->prepare( $statement );

        $this->statement->execute( $param );

        return $this;
    }


    public function fetch()
    {
        return $this->statement->fetch();
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }


}