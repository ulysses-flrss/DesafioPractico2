<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $img
 * @property int $category
 * @property float $price
 * @property int $stock
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	public $incrementing = false;

	protected $casts = [
		'category' => 'int',
		'price' => 'float',
		'stock' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'img',
		'category',
		'price',
		'stock'
	];
}
