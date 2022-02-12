<?php
namespace App\Models;
use CodeIgniter\Model;

class UserTransactionModel extends Model
{
    protected $table = "vss_usertransaction";
    protected $primaryKey = "trans_id";

    protected $allowedFields = [
        'trans_type',
        'user_id',
        'trans_date',
        'trans_description',
        'trans_status',
        'trans_amount',
        'created_date',
    ];
}

