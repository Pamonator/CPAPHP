<?php

require_once 'require.php';

class Connection implements IConnection {

    private $mysql;
    private $host = IConnection::HOST;
    private $base = IConnection::BASE;
    private $user = IConnection::USER;
    private $pass = IConnection::PASS;

    public function connect() {
        
    }

    public function disconnect() {
        
    }

    public function testar() {

        $this->mysql = new mysqli($this->host, $this->user, $this->pass, $this->base);

        if (mysqli_connect_error()) {
            die("Falha na conexão!");
        }
    }

}
