<?php 

/**
 * Class Product
 */
class Product
{
    private $title;

    /**
     * Product constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}

/**
 * Class BookList
 */
class BookList implements \Countable, \Iterator
{
    private $products = [];

    private $currentIndex = 0;

    /**
     * @param Product $product
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * @param Product $toRemove
     */
    public function removeBook(Product $toRemove)
    {
        foreach ($this->products as $key => $product) {
            if ($product->getTitle() === $toRemove->getTitle()) {
                unset($this->products[$key]);
            }
        }

        $this->products = array_values($this->products);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->products);
    }

    /**
     * @return Product
     */
    public function current(): Product
    {
        return $this->products[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->products[$this->currentIndex]);
    }
}
