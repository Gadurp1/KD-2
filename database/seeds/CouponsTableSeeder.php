<?php
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder{

	public function run()
	{
		DB::table('coupons')->delete();
		$couponsJson = File::get(storage_path() . "/coupons.json");
		$coupons = json_decode($couponsJson);
		foreach ($coupons as $object) {
			Coupons::create(array(
				'title' => $object->title,
				'date' => $object->date,
				'size' => $object->size,
				'id' => $object->id,
        'settlement' => $object->settlement,
        'p1' = $object->p1,
        'p2' = $object->p2,
        'industry' = $object->industry
			));
		}
	}
}
?>
