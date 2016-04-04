<?php 
namespace App\Models\Repository;

use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
	/**
	 * Tim data tu mot thuoc tinh truyen vao. 
	 * @param $label: Nhan cua node (tuong tu nhu cai ten bang)
	 * @param $attributesSelect: cac truong du lieu se duoc get ra, VD select ra id hoac email trong tat ca cac da lieu
	 * @param $attribute: thuoc tinh so sanh
	 * @param $value: gia tri cua thuoc tinh so sanh
	 * @return du lieu can get.
	 **/
	public function findByProperty( array $attributesSelect, $attribute, $value , $label )
 	{

 		$result = DB::table($label)->select( $attributesSelect )->where( $attribute , $value )->get();
 		
 		return $result;
 	}
}
?>