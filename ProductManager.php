<?php


class ProductManager
{
    protected $product;

    public function __construct()
    {
        $this->product = [];
    }

    public function listProducts()
    {
        return $this->product;
    }

    public function add($product)
    {
        array_push($this->product, $product);
    }

    public function delete($index)
    {
        array_splice($this->product, $index, 1);
    }

    public function update($index, $product)
    {
        $this->product[$index] = $product;
    }

    public function get($index)
    {
        return $this->product[$index];
    }
}