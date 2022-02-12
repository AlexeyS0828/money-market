<?php
namespace App\Models;
use CodeIgniter\Model;

class BanksModel extends Model
{
    protected $table = "vss_banks";
    protected $primaryKey = "id";

    protected $allowedFields = ['name', 'bank_name'];

    public function get_bankData($user_id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table("vss_userbank")
                    ->select("vss_userbank.*, vss_banks.name, vss_banks.bank_name")
                    ->join("vss_banks", "vss_userbank.bank_base_id = vss_banks.id", "left")
                    ->where("vss_userbank.user_id", $user_id)
                    ->where("bank_status", 1);
        $query = $builder->get();
        $result = $query->getResult();
        return $result;
    }


}

