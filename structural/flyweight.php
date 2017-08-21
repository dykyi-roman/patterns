<?php

/**
 * Interface FlyweightInterface
 */
interface FlyweightInterface
{
    public function render(string $extrinsicState): string;
}

/**
 * Implements the flyweight interface and adds storage for intrinsic state, if any.
 * Instances of concrete flyweights are shared by means of a factory.
 */
class ProductFlyweight implements FlyweightInterface
{
    /**
     * Any state stored by the concrete flyweight must be independent of its context.
     * For flyweights representing characters, this is usually the corresponding character code.
     *
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function render(string $count): string
    {
        // ...
        return sprintf('product %s with count%s', $this->name, $count);
    }
}

/**
 * A factory manages shared flyweights. Clients should not instantiate them directly,
 * but let the factory take care of returning existing objects or creating new ones.
 */
class FlyweightFactory implements \Countable
{
    /**
     * @var ProductFlyweight[]
     */
    private $pool = [];

    public function get(string $name): ProductFlyweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new ProductFlyweight($name);
        }

        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }
}
