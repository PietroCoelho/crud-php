<?php

namespace App\Controller;

use App\Core\Controller;
use App\Model\Delivery;

class DeliveryController extends Controller
{
    public function  __construct()
    {
        $this->class = new Delivery();
    }


    public function index()
    {
        
        $rs = $this->class->getDeliveries();
        return $rs;
    }

    public function store(array $parametros = [])
    {
        $this->setParams($parametros);
        return $this->class->insert($this->parametros);
    }
}
