<?php

namespace App\Model;

use App\Core\DB;
use DateTime;
use PDO;

final class Delivery
{
    /**
     * Codigo de identificacao
     * @var int
     */
    public int $code;

    /**
     * titulo
     * @var string
     * */
    public string $title;

    /**
     * descricao da entrega
     * @var string
     * */
    public string $description;

    /**
     * data de entrega
     * @var DateTime
     * */
    public DateTime $deadLineDelivery;

    /**
     * entrega concluida
     * @var string
     * */
    public string $deliveryCompleted;

    public function getDeliveries($where = null, $order = null, $limit = null): array
    {
        return (new DB('entrega'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public function getDeliverieById($id): Delivery
    {
        return (new DB('entrega'))->select('id = ' . $id)->fetchObject(self::class);
    }

    public function save()
    {
        $this->deadLineDelivery = date('Y-m-d H:i:s');

        $dataBase = new DB('entrega');
        $this->code = $dataBase->insert([
            'titulo' => $this->title,
            'descricao' => $this->description,
            'prazo_entrega' => $this->deadLineDelivery,
            'entrega_concluida' => $this->deliveryCompleted
        ]);

        return true;
    }
}
