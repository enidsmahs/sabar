<?php

interface ProcessusService
{
    // METHODE pour recupérer
    public function read($sql);

    // METHODE pour faire un decompte
    public function read_count($sql);

    public function create($sql, $attr);
}