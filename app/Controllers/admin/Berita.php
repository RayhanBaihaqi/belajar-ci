<?php 
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BeritaModel;

class Berita extends BaseController {
    public function index() {
        //buat object dari class UserModel
        $model = new BeritaModel();

        //load seluruh data
        $data['berita'] = $model->orderBy('id','DESC')
                                ->findAll();

        return view('berita_view_all', $data);
    }
    public function create() {
        return view('berita_create_user');
    }
    public function store() {
        $model = new BeritaModel();

        $data = [
            'judulberita' => $this->request->getVar('judulberita'),
            'author' => $this->request->getVar('author'),
            'tglposting' => $this->request->getVar('tglposting'),
            'foto' => $this->request->getVar('foto'),
            'isiberita' => $this->request->getVar('isiberita'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/Berita'));
    }
    public function edit($id = null) {
        $model = new BeritaModel();
        $data['berita'] = $model->where('id',$id)->first();

        return view('berita_edit_user',$data);
    }
    public function update() {
        $model = new BeritaModel();
        $id = $this->request->getVar('id');
        $data = [
            'judulberita' => $this->request->getVar('judulberita'),
            'author' => $this->request->getVar('author'),
            'tglposting' => $this->request->getVar('tglposting'),
            'foto' => $this->request->getVar('foto'),
            'isiberita' => $this->request->getVar('isiberita'),
        ];
        $save = $model->update($id,$data);

        return redirect()->to(base_url('admin/Berita'));
    }
    public function delete($id = null) {
        $model = new BeritaModel();
        $data['berita'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('admin/Berita'));
    }
}
?>