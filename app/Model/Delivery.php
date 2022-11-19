<?php

namespace App\Model;

use App\Core\DB;
use PDO;

final class Delivery
{

    /**
     * Codigo de identificacao
     * @var int
     */
    public int $id;

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
     * @var string
     * */
    public string $deadLineDelivery;

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

    public function insert()
    {

        $this->code = rand(0, 999999);

        //INSERIR A VAGA NO BANCO
        $db = new DB('entrega');
        $this->id = $db->insert([
            'codigo'    => $this->code,
            'titulo'    => $this->title,
            'descricao' => $this->description,
            'prazo_entrega'     => $this->deadLineDelivery ? date('Y-m-d', strtotime($this->deadLineDelivery)) : date('Y-m-d'),
            'entrega_concluida'      => $this->deliveryCompleted
        ]);

        //RETORNAR SUCESSO
        return true;
    }

    public function update()
    {
        return (new DB('entrega'))->update('id = ' . $this->id, [
            'titulo'    => $this->title,
            'descricao' => $this->description,
            'prazo_entrega'     => $this->deadLineDelivery ? date('Y-m-d', strtotime($this->deadLineDelivery)) : date('Y-m-d'),
            'entrega_concluida'      => $this->deliveryCompleted
        ]);
    }

    public function delete()
    {
        return (new DB('entrega'))->delete('id = ' . $this->id);
    }
}
