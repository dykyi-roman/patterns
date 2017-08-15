<?php

/**
 * Class Order
 */
class Order{
    //...
}

/**
 * Class Product
 *
*/
class Product
{
    /**
     * @param Closure $ordersReference
     */
    public function setOrdersReference(Closure $ordersReference)
    {
        $this->ordersReference = $ordersReference;
    }

    /**
     * @return mixed
     */
    public function getOrders()
    {
        if(!isset($this->orders)) {
            $reference = $this->ordersReference;
            $this->orders = $reference();
        }
        return $this->orders;
    }
}

/**
 * Class ProductRepository
 *
 * In DDD, we solve this by keeping the Customer class pure, and move the logic for storing the object to a CustomerRepository.
 * Clients of the Repository don’t know how or where it finds Customers,
 * and the Customer class itself doesn’t know anything about the Repository or the database it is stored in.
 * As for the Orders, they are pushed in the Customer at creation time.
 *
 */
class ProductRepository
{
    public function find($id)
    {
        $db = $this->db;
        $data = $db->query(/* select customer ...*/);

        /** @var Product $customer */
        $customer = new Product($data);

        $ordersReference = function($customer) use($id, $db) {
            $data = $db->query(/* select orders ... */);
            $orders = [];
            foreach($data as $one) {
                $orders[] = new Order($one);
            }
            return $orders;
        };
        $customer->setOrderReference($ordersReference);
        return $customer;
    }
}