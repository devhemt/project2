<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Totalproperty>
 */
class Nature1Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $itemsid = 7;
    protected $models = \App\Models\Totalproperty::class;
    public function definition()
    {
        return [
            'itemsid'=> self::$itemsid++,
            'size'=>'XL S',
            'color'=>'black red',
            'amount'=>'60',
            'created_at'=>now()
        ];
    }
}
