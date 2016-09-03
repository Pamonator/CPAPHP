<?php

interface IConnection {

    const HOST = "10.10.117.3";
    const USER = "cpa";
    const PASS = "cpa";
    const BASE = "cpa";
    
    public function testar();
    public function connect();
    public function disconnect();

}
