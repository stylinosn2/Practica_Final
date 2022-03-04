<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
	protected $table = 'usuario';
	protected $primaryKey = 'id_usuario';

	protected $useAutoIncrement = true;

	protected $returnType = 'array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['nombre','apellidos','telefono', 'domicilio','usuario', 'password'];

	protected $useTimestamps = false;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $delatedField = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;

}
