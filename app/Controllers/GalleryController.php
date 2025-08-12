<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGalery;
use CodeIgniter\HTTP\ResponseInterface;
use SebastianBergmann\Template\Template;

class GalleryController extends BaseController
{
    public function gallery()
    {
        $model = new \App\Models\ModelGalery();
        $data = ['gallery' => $model->findAll()];
        return view('template/header') . view('gallery', $data) . view('template/footer');
    }

    
    public function detail($id)
    {
        $model = model(ModelGalery::class);
        $data = [
            'gallery' => $model->find($id)
        ];
        return view('template/header')
            . view('detail', $data)
            . view('template/footer');
    }


    public function formAdd()
    {
        return view('template/header') . view('formAdd') . view('template/footer');
    }

    public function add()
    {
        $model = model(ModelGalery::class);
        $data = [
            'name' => $this->request->getPost('name'),
            'date' => $this->request->getPost('date')
        ];

        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $name = $image->getName();
            $image->move('assets/', $name);
            $data['image'] = 'assets/' . $name;
        }

        if ($model->insert($data)) {
            return redirect()->to('/gallery');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }

    public function formUpdate($id)
    {
        $model = model(ModelGalery::class);
        $data = [
            'gallery' => $model->find($id)
        ];
        return view('template/header')
            . view('formUpdate', $data)
            . view('template/footer');
    }

    public function update($id)
    {
        $model = model(ModelGalery::class);
        $data = [
            'name' => $this->request->getPost('name'),
            'date' => $this->request->getPost('date')
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $name = $image->getName();
            $image->move('assets/', $name);
            $data['image'] = 'assets/' . $name;
        }

        if ($model->update($id, $data)) {
            return redirect()->to('/gallery');
        } else {
            return redirect()->back()->withInput()->with('errors', $model->errors());
        }
    }
    
    public function delete($id)
    {
        $model = model(ModelGalery::class);
        $gallery = $model->find($id);

        if ($gallery) {
            if (file_exists($gallery['image'])) {
                unlink($gallery['image']);
            }
            $model->delete($id);
            return redirect()->to('/gallery')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('/gallery')->with('error', 'Data tidak ditemukan.');
        }
    }
}
