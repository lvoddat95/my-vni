<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;

class CategoryController extends Controller
{
    private $category;

    // khoi tao gia tri Category $category
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    // Phuong thuc tra ve view category.index
    public function index()
    {   
        // Lay du lieu moi nhat tu Modal category bang phuong thuc lastest(), phan trang 5 ban ghi paginate(5)
        $categories = $this->category->latest()->paginate(5);
        // tra ve view category.index, truyen bien $categories qua view
        return view('backend.category.index', compact('categories'));
    }

    // Phuong thuc tra ve view category.add
    public function create()
    {

        $htmlOption = $this->getCategory($parentId = '');

        // tra ve view category.add, truyen bien $htmlOption qua view
        return view('backend.category.add', compact('htmlOption'));
    }

    // Phuong thuc them moi danh muc vao category
    public function store(Request $request)
    {
        // Lay gia tri Request tu form name
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        
        // Them thanh cong redirect ve route categories.index
        return redirect()->route('categories.index');

    }
    
    public function getCategory($parentId)
    {
        // Lay tat ca du lieu tu Modal category bang phuong thuc all()
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function edit($id)
    {   
        // Lay category theo id bang phuong thuc find()
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);

        return view('backend.category.edit', compact('category','htmlOption'));
    }

    public function update($id, Request $request)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);

        return redirect()->route('categories.index');

    }

    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('categories.index');
    }


}
