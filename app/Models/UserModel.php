<?php 
namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model
{
    protected $table = 'vss_user';
    protected $primaryKey = 'user_id';
    
    protected $allowedFields = [
        'user_name', 
        'user_email',
        'user_password',
        'is_admin',
        'created_date',
        'user_firstName',
        'user_middleName',
        'user_lastName',
        'user_dob',
        'user_gender',
        'user_education',
        'user_residence',
        '',
        '',
        '',
    ];

}
