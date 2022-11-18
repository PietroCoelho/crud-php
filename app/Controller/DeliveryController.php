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

    public function store(array $params = [])
    {
            $this->class->codigo = rand(0,99999);
            $this->class->title = '';
            $this->class->description = '';
            $this->class->deadLineDelivery = '';
            $this->class->deliveryCompleted = '';
        return $this->class->insert();
    }
}
