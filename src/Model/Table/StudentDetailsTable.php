<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class StudentDetailsTable extends Table
{
    public function initialize(array $config)
    {
        //$this->hasOne('StudentDetails');
        $this->belongsTo('Users');
    }

}