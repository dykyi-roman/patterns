<?php

/**
 * Interface CommandInterface
 */
interface CommandInterface
{
    public function execute();
}

/**
 * Class Product
 */
class Product
{
    public function package()
    {

    }

    public function delivery()
    {

    }
}

/**
 * Class PackageCommand
 */
class PackageCommand implements CommandInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function execute()
    {
        $this->product->package();
    }
}

/**
 * Class DeliveryCommand
 */
class DeliveryCommand implements CommandInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function execute()
    {
        $this->product->delivery();
    }
}

/**
 * Class CommandRegistry\
 */
class CommandRegistry
{
    private $registry = [];

    public function add(CommandInterface $command, $type)
    {
        $this->registry[$type] = $command;
    }

    public function get($type)
    {
        if (!isset($this->registry[$type])) {
            throw new RuntimeException('Cannot find command ' . $type);
        }
        return $this->registry[$type];
    }
}

/**
 * Class ProductCommandFactory
 */
class ProductCommandFactory
{
    public function factory($type, Product $product)
    {
        if ($type == 'delivery') {
            return new DeliveryCommand($product);
        }
        if ($type == 'package') {
            return new PackageCommand($product);
        }
        throw new RuntimeException('Cannot find command ' . $type);
    }
}
