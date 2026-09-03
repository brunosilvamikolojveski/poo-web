<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Category::paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {
        // $category = new Category();
        // $category->name = $request->name;
        // $category->description = $request->description;


        // $category->save();


        $data = $request->validated();

        $category = Category::create($data);

        return $category;

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        /* $category = Category::find($id);

        if(!$category){
            //404 not found
            return response()->json([
                'message'=> 'categoria não encontrada.',
            ],404);
        } */

        return $category;

    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Category $category, CategoryUpdateRequest $request)
    {
         /* if(!$category){
            //404 not found
            return response()->json([
                'message'=> 'categoria não encontrada.',
            ],404);
        } */
        $data = $request->validated();
        $category->update($data);


        return $category;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
{
    $hasProduct = \App\Models\Product::where('category_id', $category->id)->exists();

    if ($hasProduct) {

        return response()->json([
            'message' => 'Categoria com produtos relacionados',
        ], 422);
    }

    $category->delete();


    return response()->json(null, 204);
}
}
