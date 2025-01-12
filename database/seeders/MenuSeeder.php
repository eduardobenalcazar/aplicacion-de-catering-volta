<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            // Entradas
            [
                'nombre' => 'Mini brochetas de queso y uva',
                'descripcion' => 'Deliciosas brochetas de queso acompañadas de uvas frescas.',
                'precio' => 5.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Tartaletas de espinaca y queso feta',
                'descripcion' => 'Tartaletas horneadas rellenas de espinacas y queso feta.',
                'precio' => 6.50,
                'imagen' => null,
            ],
            [
                'nombre' => 'Rollitos de salmón ahumado con crema de eneldo',
                'descripcion' => 'Rollitos de salmón ahumado rellenos de crema de eneldo.',
                'precio' => 7.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Croquetas de jamón ibérico',
                'descripcion' => 'Croquetas artesanales hechas con jamón ibérico de alta calidad.',
                'precio' => 8.00,
                'imagen' => null,
            ],

            // Platos Fuertes
            [
                'nombre' => 'Suprema de pollo rellena con espinacas y queso',
                'descripcion' => 'Acompañada de puré de papa y vegetales salteados.',
                'precio' => 15.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Lomo de cerdo en salsa de ciruela',
                'descripcion' => 'Servido con arroz salvaje y verduras.',
                'precio' => 16.50,
                'imagen' => null,
            ],
            [
                'nombre' => 'Filete de pescado en costra de hierbas',
                'descripcion' => 'Acompañado de ensalada de quinoa y aderezo de limón.',
                'precio' => 18.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Lasagna de verduras asadas con queso ricotta',
                'descripcion' => 'Opción vegetariana con ingredientes frescos y horneados.',
                'precio' => 14.00,
                'imagen' => null,
            ],

            // Postres
            [
                'nombre' => 'Cheesecake de frutos rojos',
                'descripcion' => 'Cheesecake cremoso con una deliciosa capa de frutos rojos.',
                'precio' => 7.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Mousse de chocolate con crumble de avellanas',
                'descripcion' => 'Mousse de chocolate negro acompañado de crumble de avellanas.',
                'precio' => 6.50,
                'imagen' => null,
            ],
            [
                'nombre' => 'Tarta de limón con merengue italiano',
                'descripcion' => 'Tarta con un balance perfecto de acidez y dulzura.',
                'precio' => 6.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Frutas frescas con yogur y miel',
                'descripcion' => 'Combinación saludable de frutas frescas con un toque de miel.',
                'precio' => 5.50,
                'imagen' => null,
            ],

            // Bebidas
            [
                'nombre' => 'Jugos naturales',
                'descripcion' => 'Sabores disponibles: naranja, mango, fresa.',
                'precio' => 4.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Agua saborizada',
                'descripcion' => 'Pepino, limón y menta para una bebida refrescante.',
                'precio' => 3.50,
                'imagen' => null,
            ],
            [
                'nombre' => 'Café y té',
                'descripcion' => 'Variedad de café y té para acompañar tus comidas.',
                'precio' => 2.50,
                'imagen' => null,
            ],
            [
                'nombre' => 'Barra de cócteles y vinos (opcional)',
                'descripcion' => 'Selección de cócteles y vinos según el evento.',
                'precio' => 25.00,
                'imagen' => null,
            ],

            // Servicios Adicionales
            [
                'nombre' => 'Menú personalizado para eventos',
                'descripcion' => 'Diseña un menú único para tus eventos especiales.',
                'precio' => 50.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Opciones veganas y sin gluten',
                'descripcion' => 'Menús adaptados para necesidades alimenticias especiales.',
                'precio' => 10.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Mesas temáticas (quesos, postres, etc.)',
                'descripcion' => 'Mesas decoradas con especialidades según el tema del evento.',
                'precio' => 100.00,
                'imagen' => null,
            ],
            [
                'nombre' => 'Servicio de meseros y montaje',
                'descripcion' => 'Incluye meseros capacitados y montaje profesional.',
                'precio' => 200.00,
                'imagen' => null,
            ],
        ];

        DB::table('menus')->insert($menus);
    }
}
