<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property string $idProduct
 * @property int $quantity
 * @property Carbon $saleDate
 * @property float $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Sale extends Model
{
	protected $table = 'sales';

	protected $casts = [
		'quantity' => 'int',
		'saleDate' => 'datetime',
		'total' => 'float'
	];

	protected $fillable = [
		'idProduct',
		'quantity',
		'saleDate',
		'total'
	];
}
