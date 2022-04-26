<?php 
namespace App\Models;
use CodeIgniter\Model;
class LudooModel extends Model
{
    protected $table = 'ludoo';
    protected $primaryKey = 'Id';
    
    protected $allowedFields = ['TeamNo', 'TeamName',
    'TeamMembers','Margin','WinDate'];
}