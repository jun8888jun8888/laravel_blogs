<?php


namespace App\Event;

use App\Order;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use SerializesModels;

    public $order;


    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
