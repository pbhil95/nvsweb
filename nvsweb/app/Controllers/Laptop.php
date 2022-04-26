<?php 
namespace App\Controllers;
use App\Models\LissueModel;
use CodeIgniter\Controller;
class Laptop extends Controller
{
    // show users list
    public function index(){
        $lissueModel = new LissueModel();
        $data['lissue'] = $lissueModel->orderBy('Id', 'DESC')->findAll();
        return view('laptop_view', $data);
    }
    // add user form
    public function create(){
        return view('issue_laptop');
    }
 
    // insert data
    public function store() {
        $lissueModel = new lissueModel();
        $data = [
            'StaffName' => $this->request->getVar('sname'),
            'LaptopNo'  => $this->request->getVar('lno'),
            'IssueDate' => $this->request->getVar('isd'),
            'ReturnDate' => $this->request->getVar('rd')
        ];
        $lissueModel->insert($data);
        return $this->response->redirect(site_url('/laptop-view'));
    }
    // show single user
    public function singleUser($id = null){
        $lissueModel = new lissueModel();
        $data['user_obj'] = $lissueModel->where('Id', $id)->first();
        return view('laptop_edit_view', $data);
    }
    // update user data
    public function update(){
        $lissueModel = new lissueModel();
        $id = $this->request->getVar('Id');
        $data = [
            'StaffName' => $this->request->getVar('sname'),
            'LaptopNo'  => $this->request->getVar('lno'),
          #  'IssueDate' => $this->request->getVar('isd'),
            'ReturnDate' => $this->request->getVar('rd')
        ];
        $lissueModel->update($id, $data);
        return $this->response->redirect(site_url('/laptop-view'));
    }
 
    // delete user
    public function delete($id = null){
        $lissueModel = new lissueModel();
        $data['lapdel'] = $lissueModel->where('Id', $id)->delete($id);
        return $this->response->redirect(site_url('/laptop-view'));
    }
    
    public function main()
    {
        return view('main_view');
    }
}