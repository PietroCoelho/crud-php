<?php

namespace App\Controller;

use App\Model\Delivery;

final class DeliveryController
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
        $this->class->title = $params['title'];
        $this->class->description = $params['description'];
        $this->class->deadLineDelivery = $params['dead_line_delivery'];
        $this->class->deliveryCompleted = !empty($params['delivery_completed']) ? $params['delivery_completed'] : 'false';
        return $this->class->insert();
    }

    public function update(int $id, array $params = [])
    {

        $this->class->id = $id;
        $this->class->title = $params['title'];
        $this->class->description = $params['description'];
        $this->class->deadLineDelivery = $params['dead_line_delivery'];
        $this->class->deliveryCompleted = !empty($params['delivery_completed']) ? $params['delivery_completed'] : 'false';

        return $this->class->update();
    }

    public function delete(int $id)
    {
        $this->class->id = $id;
        return $this->class->delete();
    }
}
