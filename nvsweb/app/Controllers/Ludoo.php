<?php 
namespace App\Controllers;
use App\Models\LudooModel;
use CodeIgniter\Controller;
class Ludoo extends Controller
{
    // show users list
    public function index(){
        $LudooModel = new LudooModel();
        $data['ludoo'] = $LudooModel->orderBy('Id', 'DESC')->findAll();
        return view('ludoo_view', $data);
    }
    // add user form
    public function create(){
        return view('ludoo_entry');
    }
 
    // insert data
    public function store() {
        $LudooModel = new LudooModel();
        $data = [
            'Id' => $this->request->getVar('Id'),
            'TeamName' => $this->request->getVar('tname'),
            'TeamNo'  => $this->request->getVar('tno'),
            'TeamMembers'  => $this->request->getVar('tmembers'),
            'WinDate' => $this->request->getVar('wdate'),
            'Margin' => $this->request->getVar('margin')
        ];
        $LudooModel->insert($data);
        return $this->response->redirect(site_url('/ludoo-view'));
    }
    // show single user
    public function singleUser($id = null){
        $LudooModel = new LudooModel();
        $data['user_obj'] = $LudooModel->where('Id', $id)->first();
        return view('ludoo_edit_view', $data);
    }
    // update user data
    public function update(){
        $LudooModel = new LudooModel();
        $id = $this->request->getVar('id');
        $data = [
            'Id' => $this->request->getVar('id'),
            'TeamName' => $this->request->getVar('tname'),
            'TeamNo'  => $this->request->getVar('tno'),
            'TeamMembers'  => $this->request->getVar('tmembers'),
            'WinDate' => $this->request->getVar('wdate'),
            'Margin' => $this->request->getVar('margin')
        ];
        $LudooModel->update($id, $data);
        return $this->response->redirect(site_url('/ludoo-view'));
    }
 
    // delete user
    public function delete($id = null){
        $LudooModel = new LudooModel();
        $data['lapdel'] = $LudooModel->where('Id', $id)->delete($id);
        return $this->response->redirect(site_url('/ludoo-view'));
    }    
}