<?php


namespace App\classes;


class Product
{
    protected $products = [];

    public function getAllProduct()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'T-shirt',
                'category'=>'Man Fashion',
                'brand'=>'Yello',
                'price'=>'999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'a1.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Shirt',
                'category'=>'Man Fashion',
                'brand'=>'Yello',
                'price'=>'1999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'a2.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Smart Watch',
                'category'=>'Electronics',
                'brand'=>'Samsung',
                'price'=>'9999',
                'description'=>'I have owned previously the samsung s7 edge and with it I had the samsung gear s2 smart watch. At the time I was pleased with both the phone and the watch, but ...',
                'image'=>'a3.jpg'
            ]
        ];
    }
    public function getAllProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}