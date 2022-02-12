<?php 
namespace App\Controllers\Admin;
use App\Models\UserModel;
use CodeIgniter\Controller;
class UserManageController extends Controller
{
    public function index(){
        $userModel = new UserModel();
        $session = session();
        $data = [
            'current_page' => 'user-details',
            'title' => "User List",
            'id' => $session->id,
        ];
        $data['user_details'] = $userModel->orderBy('user_id', 'DESC')->findAll();
        return view('admin/user-list', $data);
    }

    public function create(){
        $data = [
            'title' => "Add New User"
        ];
        return view('admin/add-user', $data);
    }
 
    public function store() {
        helper(['form']);
        $rules = [
            'user_email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[vss_user.user_email]',
        ];
        if($this->validate($rules)){
            $userModel = new UserModel();
            $data = [
                'user_email'  => $this->request->getVar('user_email'),
                'user_firstName' => $this->request->getVar('user_firstName'),
                'user_middleName' => $this->request->getVar('user_middleName'),
                'user_lastName' => $this->request->getVar('user_lastName'),
                'user_dob' => $this->request->getVar('user_dob'),
                'user_gender' => $this->request->getVar('user_gender'),
                'user_education' => $this->request->getVar('user_education'),
                'user_residence' => $this->request->getVar('user_residence'),
            ];
            $userModel->save($data);
            return $this->response->redirect(site_url('/admin/user-list'));
        }else{
            $data['validation'] = $this->validator;
            echo view('admin/add-user', $data);
        }
    }
    
    public function singleUser($id = null){
        $data['user'] = select_user($id);
        $session = session();
        $data['title'] = "User Profile (" . $session->get('selected_user_name') . ")";
        return view('admin/edit-user', $data);
    }

    public function update(){
        // $userModel = new UserModel();
        // $id = $this->request->getVar('id');
        // $data = [
        //     'name' => $this->request->getVar('name'),
        //     'email'  => $this->request->getVar('email'),
        // ];
        // $userModel->update($id, $data);
        // return $this->response->redirect(site_url('/users-list'));
    }
 
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/user-list'));
    }

    public function profile() {
        $data = get_selected_user();
        if(!$data) {
            return redirect()->to('/admin/user-list');
        }
        $data['title'] = "User Profile (" . session()->get('selected_user_name') . ")";
        return view('admin/edit-user', $data);
    }


}