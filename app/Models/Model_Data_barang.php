<?php
 
namespace App\Models;
use CodeIgniter\Model;
 
class Model_data_gudang extends Model{
    protected $table ="data_gudang";
    protected $primaryKey ="kode";
    protected $allowedFields =[
        'nama_barang',
        'jenis',
        'harga',
        'stok',
    ];
    protected $validationRules =[
        'nama_barang'=>'required',
        'jenis'=>'required',
        'harga'=>'required',
        'stok'=>'required',
    ];
    protected $validationMessages =[
        'nama_barang'=>[
            'required'=>'Masukkan nama_barang'
        ],
        'jenis'=>[
            'required'=>'Masukkan jenis'
        ],
        'harga'=>[
            'required'=>'Masukkan harga'
        ],
        'stok'=>[
            'required'=>'Masukkan stok'
        ],
 
 
    ];
}