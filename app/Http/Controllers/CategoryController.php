<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;

/**
 * Controller method the manages Categories
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryController constructor.
     *
     * @param Category $selectedCategory
     */
    public function __construct(Category $selectedCategory)
    {
        $this->category = $selectedCategory;
    }

    /**
     *Show a list of all Categories
     *
     * @return View
     */
    public function index()
    {
        $categories = $this->category->latest()->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new Category.
     *
     * @return View
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created Category in the database.
     *
     * @param Category $category
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category $category, CategoryRequest $request)
    {
        $category->create($request->all());
        return redirect()->route('categories_path');
    }


    /**
     *Show details of a selected Category
     *
     * @param Category $category
     * @return View
     */
    public function show(Category $category)
    {
        $subcategories = [['id' => '1', 'name' => 'Finance'], ['id' => '2', 'name' => 'Luxury']];
        $subcategories = [];
        return view('categories.show', compact('category', 'subcategories'));
    }

    /**
     * Edit a selected Category
     *
     * @param Category $category
     * @return View
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Category $category
     * @param CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Category $category, CategoryRequest $request)
    {
        $category->update($request->input());
        return redirect()->route('category_path', $category->id);
    }

    /**
     * Remove the specified Category from the database.
     *
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories_path');
    }


    /**
     * List all Sub Categories
     *
     * @return string
     */
    public function subCategories()
    {
        $subcategories = [['id' => '1', 'name' => 'Finance'], ['id' => '2', 'name' => 'Luxury']];
        //$subcategories = [];
        return view('categories.subcategories', compact('subcategories'));
    }
}