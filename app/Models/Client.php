<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class Client
 * 
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $state
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Client extends Authenticatable
{
	protected $table = 'clients';

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'last_name',
		'email',
		'password',
		'state'
	];
}
