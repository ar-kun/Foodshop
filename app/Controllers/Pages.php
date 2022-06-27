<?php

namespace App\Controllers;

use App\Models\PortoModel;
use App\Models\ProductModel;

class Pages extends BaseController
{
    // protected $PortoModel;
    protected $ProductModel;
    public function __construct()
    {
        // $this->PortoModel = new PortoModel();
        $this->ProductModel = new ProductModel();
    }
    public function index()
    {
       
        // $product = $this->ProductModel->findAll();
        $data = [
            'title'=>'Home',
            // 'porto' => $Porto->getEdu(),
            'product'=> $this->ProductModel->getProduct()
        ];
        return view('pages/home',$data);
    }
    public function product()
    {
        
        // $product = $this->ProductModel->findAll();
        $data = [
            'title'=>'Product',
            // 'porto' => $Porto->getEdu(),
            'product'=> $this->ProductModel->getProduct()
        ];
        return view('pages/product',$data);
    }
    public function gallery()
    {
        
        // $product = $this->ProductModel->findAll();
        $data = [
            'title'=>'Gallery',
            // 'porto' => $Porto->getEdu(),
            // 'product'=> $this->ProductModel->getProduct()
        ];
        return view('pages/gallery',$data);
    }
    public function contact()
    {
       
        // $product = $this->ProductModel->findAll();
        $data = [
            'title'=>'Contact',
            // 'porto' => $Porto->getEdu(),
            // 'product'=> $this->ProductModel->getProduct()
        ];
        return view('pages/contact',$data);
    }
    public function detail($pro_slug)
    {
        $data = [
            'title'=>'Detail | Portofolio',
            'product' => $this->ProductModel->getProduct($pro_slug)
        ];
        if(empty($data["product"])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Product '.$pro_slug.'Tidak Di Temukan');
        }
        return view('pages/detail',$data);
    }
}