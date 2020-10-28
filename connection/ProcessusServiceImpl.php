<?php
    require 'ProcessusService.php';
    require 'DataBase.php';

class ProcessusServiceImpl implements ProcessusService
{
    private $db;

    public function __construct()
    {
        $this->db = new DataBase();
    }

    public function read($sql)
    {
        return $statement = $this->db->getConnection()
            ->query($sql)
            ->fetchAll(PDO::FETCH_OBJ);
    }

    public function read_count($sql)
    {
        return $statement = $this->db->getConnection()
            ->query($sql)
            ->rowCount();
    }

    public function create($sql, $attr)
    {
        return $statement = $this->db->getConnection()
            ->prepare($sql)
            ->execute($attr);
    }
}