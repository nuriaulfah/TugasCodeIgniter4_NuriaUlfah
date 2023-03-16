<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    //table name
    protected $table = "kategori";

    //allowed fields
    protected $allowedFields = 
    [
        'id_kategori',
        'nama_kategori',
        'status'
    ];

    public function getKategori()
    {
        return $this->findAll();
    }
}

?>