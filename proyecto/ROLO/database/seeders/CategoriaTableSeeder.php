<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Product;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1 = new Categoria;
        $categoria1->nombre = 'Hamburguesa';
        $categoria1->save();

        $categoria2 = new Categoria;
        $categoria2->nombre = 'Guarnicion';
        $categoria2->save();

        $categoria3 = new Categoria;
        $categoria3->nombre = 'Aderezo';
        $categoria3->save();

        $categoria4 = new Categoria;
        $categoria4->nombre = 'Bebida';
        $categoria4->save();

        $product1 = new Product;
        $product1->nombre = 'Hamburguesa pollo';
        $product1->precio = 2800.00;
        $product1->descripcion = 'Burger de pollo con aguacate, queso cheddar y aderezo ranchero!';
        $product1->imagen = '1688944441_burger_pollo.jpg';
        $product1->id_categoria = $categoria1->id;
        $product1->save();

        $product2 = new Product;
        $product2->nombre = 'Hamburguesa veggie';
        $product2->precio = 3300.00;
        $product2->descripcion = 'Burger vegetariana con champiñones, espinacas y queso feta';
        $product2->imagen = '1688942080_burger_veggie.jpg';
        $product2->id_categoria = $categoria1->id;
        $product2->save();

        $product3 = new Product;
        $product3->nombre = 'Hamburguesa con baccon';
        $product3->precio = 3100.00;
        $product3->descripcion = 'Burger de carne de res con tocino, queso cheddar y salsa BBQ';
        $product3->imagen = '1688942267_burger_tocino.jpg';
        $product3->id_categoria = $categoria1->id;
        $product3->save();

        $product4 = new Product;
        $product4->nombre = 'Hamburguesa doble';
        $product4->precio = 3500.00;
        $product4->descripcion = 'Doble burger de carne de res con lechuga, tomate y aderezo especial';
        $product4->imagen = '1688942338_burger_doble.jpg';
        $product4->id_categoria = $categoria1->id;
        $product4->save();

        $product5 = new Product;
        $product5->nombre = 'Hamburguesa BBQ';
        $product5->precio = 2900.00;
        $product5->descripcion = 'Burger de carne de res con salsa BBQ, cebolla frita y queso cheddar';
        $product5->imagen = '1688942591_burger_BBQ.jpg';
        $product5->id_categoria = $categoria1->id;
        $product5->save();

        $product6 = new Product;
        $product6->nombre = 'Hamburguesa de salmon';
        $product6->precio = 3600.00;
        $product6->descripcion = 'Burger de salmón con aguacate, rúcula, aderezo especial, tomate y lechuga.';
        $product6->imagen = '1688942708_burger_salmon.jpg';
        $product6->id_categoria = $categoria1->id;
        $product6->save();

        $product7 = new Product;
        $product7->nombre = 'Hamburguesa hawaiana';
        $product7->precio = 3200.00;
        $product7->descripcion = 'Burger de res con piña, queso cheddar, bacoon y salsa teriyaki.';
        $product7->imagen = '1689127286_hawaiana.jpeg';
        $product7->id_categoria = $categoria1->id;
        $product7->save();

        $product8 = new Product;
        $product8->nombre = 'Hamburguesa clasica';
        $product8->precio = 2000.00;
        $product8->descripcion = 'Burger de 110gr con lechuga, tomate y cebolla caramelizada.';
        $product8->imagen = '1689123956_clasica.jpeg';
        $product8->id_categoria = $categoria1->id;
        $product8->save();

        $product9 = new Product;
        $product9->nombre = 'Papas fritas con chedar';
        $product9->precio = 1000.00;
        $product9->descripcion = 'Papas fritas con un baño de queso chedar';
        $product9->imagen = '1689123776_papas chedar.jpg';
        $product9->id_categoria = $categoria2->id;
        $product9->save();

        $product10 = new Product;
        $product10->nombre = 'Coca-cola';
        $product10->precio = 500.00;
        $product10->descripcion = 'Botella de 600 ml de Coca-cola bien helada!';
        $product10->imagen = '1689126676_coca.jpg';
        $product10->id_categoria = $categoria4->id;
        $product10->save();

        $product11 = new Product;
        $product11->nombre = 'Cheedar';
        $product11->precio = 500.00;
        $product11->descripcion = 'Aderezo extra de cheedar único para tus papas!';
        $product11->imagen = '1689126893_cheedar.jpg';
        $product11->id_categoria = $categoria3->id;
        $product11->save();

        $product12 = new Product;
        $product12->nombre = 'Cervesa Negra';
        $product12->precio = 700.00;
        $product12->descripcion = 'Cervesa negra de pura malta, elaborada por nosotros!';
        $product12->imagen = '1689127108_cervesa negra.jpg';
        $product12->id_categoria = $categoria4->id;
        $product12->save();

        $product13 = new Product;
        $product13->nombre = 'Aros de cebolla';
        $product13->precio = 500.00;
        $product13->descripcion = 'Aros de cebolla condimentado a gusto!';
        $product13->imagen = '1689294507_aros de cebolla.jpg';
        $product13->id_categoria = $categoria2->id;
        $product13->save();

        $product14 = new Product;
        $product14->nombre = 'Papas fritas con bacoon';
        $product14->precio = 1100.00;
        $product14->descripcion = 'Papas fritas con bacoon y cebolla de verdeo!';
        $product14->imagen = '1689294568_papas bacoon.jpg';
        $product14->id_categoria = $categoria2->id;
        $product14->save();

        $product15 = new Product;
        $product15->nombre = 'Salsa barbacoa';
        $product15->precio = 500.00;
        $product15->descripcion = 'Salsa barbacoa ahumada o picante!';
        $product15->imagen = '1689294875_salsa barbacoa.jpg';
        $product15->id_categoria = $categoria3->id;
        $product15->save();

        $product16 = new Product;
        $product16->nombre = 'Salsa tartara';
        $product16->precio = 700.00;
        $product16->descripcion = 'No la recomiendo es fea!';
        $product16->imagen = '1689294930_salsa tartara.jpg';
        $product16->id_categoria = $categoria3->id;
        $product16->save();

        $product17 = new Product;
        $product17->nombre = 'Limonada';
        $product17->precio = 1200.00;
        $product17->descripcion = 'Litro limonada bien helada!';
        $product17->imagen = '1689295054_limonda.jpg';
        $product17->id_categoria = $categoria4->id;
        $product17->save();
    }
}
