<?php

use Illuminate\Database\Seeder;
use App\Models\ItemCategory;
use App\Models\ItemType;
use App\Models\LostItem;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phoneCat = ItemCategory::create([
            'name'     => 'Mobile Phone',
            'has_subs' => 'Y'
        ]); 

        $iphone4 = ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'			   => 'iPhone',
        	'model'            => '4',
        	'description'      => '-'
        ]);

        LostItem::create([
        	'item_type_id' => $iphone4->id,
        	'location'     => 'Toilet',
        	'description'  => 'Has a blue case',
            'is_found'     => 'N'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'			   => 'iPhone',
        	'model'            => '5',
        	'description'      => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'				 => 'iPhone',
        	'model'              => '6',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'				 => 'Samsung',
        	'model'              => 'Galaxy S4',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'				 => 'Samsung',
        	'model'              => 'Galaxy S5',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'				 => 'Samsung',
        	'model'              => 'Galaxy S6',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $phoneCat->id,
        	'make'				 => 'Other Phone',
        	'model'              => '',
        	'description'               => '-'
        ]);

        $idCat = ItemCategory::create([
            'name'     => 'Identification',
            'has_subs' => 'Y'
        ]);

        ItemType::create([
        	'item_category_id' => $idCat->id,
        	'make'				 => 'Passport',
        	'model'              => '',
        	'description'        => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $idCat->id,
        	'make'				 => 'Driving License',
        	'model'              => '',
        	'description'        => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $idCat->id,
        	'make'				 => 'Student Card',
        	'model'              => '',
        	'description'        => '-'
        ]);

        $clothingCat = ItemCategory::create([
            'name'     => 'Clothing',
            'has_subs' => 'Y'
        ]);

        ItemType::create([
        	'item_category_id' => $clothingCat->id,
        	'make'				 => 'Hat',
        	'model'              => '',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $clothingCat->id,
        	'make'				 => 'Jumper',
        	'model'              => '',
        	'description'               => '-'
        ]);

        ItemType::create([
        	'item_category_id' => $clothingCat->id,
        	'make'				 => 'Shoes',
        	'model'              => '',
        	'description'               => '-'
        ]);

        $otherCat = ItemCategory::create([
            'name'     => 'Other',
            'has_subs' => 'Y'
        ]);

        ItemType::create([
        	'item_category_id' => $otherCat->id,
        	'make'				 => 'Other',
        	'model'              => '',
        	'description'               => '-'
        ]);
    }
}
