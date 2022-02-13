<?php
namespace App\Models;
use CodeIgniter\Model;

class BanksModel extends Model
{
    protected $table = "vss_userbank";
    protected $primaryKey = "bank_id";

    protected $allowedFields = ['name', 'bank_name'];

    public function get_bankData($user_id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table($this->table . ' as tblUserbank')
                    ->select("tblUserbank.*, vss_banks.name, vss_banks.bank_name")
                    ->join("vss_banks", "tblUserbank.bank_base_id = vss_banks.id", "left")
                    ->where("tblUserbank.user_id", $user_id)
                    ->where("bank_status", 1);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }


}

