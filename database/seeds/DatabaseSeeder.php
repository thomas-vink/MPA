<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 10)->create()->each(function ($c) {
            for ($i=1;$i<=20;$i++) {
                $c->products()->save(factory(App\Product::class)->make());
            }
        });
    }
}
