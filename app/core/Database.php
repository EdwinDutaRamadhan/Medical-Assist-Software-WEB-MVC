<?php
class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db = DB_NAME;

    private $dbh;//Database Handler
    private $stmt;//Statement

    public function __construct(){
        //data source name
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->db.'';

        $option=[
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    //database runner with flexible query
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    //bind query for filltering sql injection
    public function bind($param, $value, $type=null){
        if( is_null($type) ){
            switch( true ){
                case is_int($value) :
                    $type = PDO ::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break; 
                default :
                $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    
    //statement executer
    public function execute(){
        $this->stmt->execute();
    }

    //result set (rs) fetch all data from database
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //result set (rs) fetch single data from database
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}