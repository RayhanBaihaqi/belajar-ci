<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\HalamanModel;

class Halaman extends BaseController {
    public function index() {
        //buat object dari class UserModel
        $model = new HalamanModel();

        //load seluruh data
        $data['halaman'] = $model->orderBy('id','DESC')
                                ->findAll();

        return view('halaman_view_all', $data);
    }
    public function create() {
        return view('halaman_create_user');
    }
    public function store() {
        $model = new HalamanModel();

        $data = [
            'judulhalaman' => $this->request->getVar('judulhalaman'),
            'author' => $this->request->getVar('author'),
            'tglposting' => $this->request->getVar('tglposting'),
            'isihalaman' => $this->request->getVar('isihalaman'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/Halaman'));
    }
    public function edit($id = null) {
        $model = new HalamanModel();
        $data['halaman'] = $model->where('id',$id)->first();

        return view('halaman_edit_user',$data);
    }
    public function update() {
        $model = new HalamanModel();
        $id = $this->request->getVar('id');
        $data = [
            'judulhalaman' => $this->request->getVar('judulhalaman'),
            'author' => $this->request->getVar('author'),
            'tglposting' => $this->request->getVar('tglposting'),
            'isihalaman' => $this->request->getVar('isihalaman'),
        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('admin/Halaman'));
    }
    public function delete($id = null) {
        $model = new HalamanModel();
        $data['halaman'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('admin/Halaman'));
    }
}
?>