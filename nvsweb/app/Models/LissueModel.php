<?php 
namespace App\Models;
use CodeIgniter\Model;
class LissueModel extends Model
{
    protected $table = 'lissue';
    protected $primaryKey = 'Id';
    
    protected $allowedFields = ['StaffName', 'LaptopNo',
    'laptopNo','IssueDate','ReturnDate'];
}