<?php
namespace App\Models;
use CodeIgniter\Model;
use DateTime;

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

    public function get_transaction_history($id = null)
    {
        if(!$id)
        {
            $id = session()->get('id');
        }
        $db = \Config\Database::connect();
        $builder = $db->table($this->table . " as a")
                        ->join("vss_user", "a.user_id = vss_user.user_id", "left")
                        ->where("trans_type", "PS")
                        ->where("a.user_id", $id);
        $query = $builder->get();

        $resultObj = $query->getResult();
        $result = [];
        foreach($resultObj as $row){
            $result[] = (array) $row;
        }
        
        return $result;
    }
}

