<?php

class Product
{
    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $type;

    public static function fromState(array $state): User
    {
        // validate state before accessing keys!

        return new self(
            $state['productName'],
            $state['type']
        );
    }

    public function __construct(string $productName, string $type)
    {
        // validate parameters before setting them!

        $this->username = $productName;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

class ProductMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;

    /**
     * @param StorageAdapter $storage
     */
    public function __construct(StorageAdapter $storage)
    {
        $this->adapter = $storage;
    }

    /**
     *
     * @param int $id
     *
     * @return User
     */
    public function findById(int $id): Product
    {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new \InvalidArgumentException("Product #$id not found");
        }

        return $this->mapRowToProduct($result);
    }

    private function mapRowToProduct(array $row): Product
    {
        return Product::fromState($row);
    }
}

class StorageAdapter
{
    /**
     * @var array
     */
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param int $id
     *
     * @return array|null
     */
    public function find(int $id)
    {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }

        return null;
    }
