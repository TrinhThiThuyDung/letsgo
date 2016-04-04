<?php 
namespace App\Models\Repository;

interface BaseRepositoryInterface{
	public function findByProperty(array $attributesSelect, $attribute, $value , $label );
}
?>