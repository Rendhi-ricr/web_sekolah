<?php
namespace App\Controllers;
use App\Models\sekolahModels;
class sekolah extends BaseController
{
protected $sekolahModels;
public function __construct()
{
    $this->sekolahModels = new sekolahModels();
}

public function index()
{
    
    $sekolah = $this->sekolahModels->findAll();

    $data = [
    'title' => 'Data sekolah',
    'sekolah' => $sekolah ];
     return view('sekolah/data_sekolah', $data);



}


public function tambah ()
{
    // echo "function tambah";
    $data = [ 'title' =>'Tambah Data sekolah' ];
    return view('sekolah/form_tambah', $data);
}


public function simpan ()
{
    $this->sekolahModels->save([
    'nim'=> $this->request->getVar('nim'),
    'nama'  => $this->request->getVar('nama'), 
    'alamat' => $this->request->getVar('alamat'),
    'no_hp' => $this->request->getVar('no_hp')
    ]);
    return redirect()->to('mahasiswa');
}


public function edit($id_mhs)
//public function edit()
{
 
  $mahasiswa =$this->mahasiswamodel->data_mhs($id_mhs);
  $data=[
    'title' => 'Edit Data Mahasiswa',
    'mahasiswa' => $mahasiswa
    ];

  return view('mahasiswa/form_edit',$data);

}



public function update()
{
  $id_mhs = $this->request->getVar('id');
  $data = [ 
  'nim' => $this->request->getVar('nim'),
  'nama'  => $this->request->getVar('nama'), 
  'alamat' => $this->request->getVar('alamat'),
  'no_hp'  => $this->request->getVar('no_hp')
  ];
  $this->mahasiswamodel->update_data($data, $id_mhs);
  return redirect()->to ('mahasiswa');
}


public function delete($id_mhs)
{
   $this->mahasiswamodel->delete_data($id_mhs);
   return redirect()->to('mahasiswa');
}


}


