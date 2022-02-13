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
        'user_house',
        'user_area',
        'user_city',
        'user_state',
        'user_pincode',
        'user_mobile',
        'user_email',
        'user_telephone',
        'user_residenceType',
        'user_empType',
        'user_salaryBankAccount',
        'user_previousProfit',
        'user_totalWorkExp',
        'user_securityQues',
        'user_securityAns',
        'user_portfolioValue',
        'user_portfolioGain',
        'user_cashBalance',
        'user_interestBalance',
        'user_savingsBalance',
        'user_pendingTransactions',
    ];

}
