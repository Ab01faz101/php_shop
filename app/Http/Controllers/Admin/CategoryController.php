<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use App\Models\Todo;
use Core\Request;
use Core\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $category = new ProductCategory();
        $categories = $category->getAll();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store()
    {
        $request = new Request();
        $inputs = $request->post();
        $validator = new Validator();
        $rules = [
            'name' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/category/create');
        }

        $category = new ProductCategory();
        $category->create($inputs);
        redirect('admin/category');
    }

    public function edit()
    {
        $request = new Request();
        $id = $request->get();
        $categoryModel = new ProductCategory();
        $category = $categoryModel->find($id['id']);

        return view('admin.category.update', compact('category'));
    }

    public function update()
    {
        $request = new Request();
        $id = $request->get();
        $inputs = $request->post();
        $categoryModel = new ProductCategory();
        $category = $categoryModel->find($id['id']);
        $validator = new Validator();
        $rules = [
            'name' => 'required',
        ];
        $valid = $validator->validate($inputs, $rules);
        if (!$valid) {
            redirect('admin/category/edit?id=' . $category['id']);
        }

        $categoryModel->update($id['id'] , $inputs);
        redirect('admin/category');
    }

    public function delete()
    {
        $request = new Request();
        $id = $request->get();
        $categoryModel = new ProductCategory();
        $categoryModel->delete($id['id']);
        redirect('admin/category');
    }


}