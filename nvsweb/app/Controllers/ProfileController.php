<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        return redirect()->to('/laptop-view');
        #echo "Hello : ".$session->get('name');
    }
}