<?php

/**
 * Interface CompositeInterface
 */
interface CompositeInterface
{
    public function render(): string;
}

/**
 * Class Product
 */
class Product implements CompositeInterface
{
    /**
     * @var CompositeInterface[]
     */
    private $elements;

    /**
     * @return string
     */
    public function render(): string
    {
        $formCode = '<div>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        $formCode .= '</div>';

        return $formCode;
    }

    /**
     * @param CompositeInterface $element
     */
    public function addElement(CompositeInterface $element)
    {
        $this->elements[] = $element;
    }
}

/**
 * Class ProductElement
 */
class ProductElement implements CompositeInterface
{
    public function render(): string
    {
        return 'Render product elements ....';
    }
}

/**
 * Class SubProductElement
 */
class SubProductElement implements CompositeInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * SubProductElement constructor.
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function render(): string
    {
        return $this->type;
    }
}
