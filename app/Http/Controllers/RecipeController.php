<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;
use App\Recipe;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients = Ingredient::all();

        return view('welcome', [
            'ingredients' => $ingredients
        ]);
    }

    public function searchRecipes(Request $request)
    {
        $validatedData = $request->validate([
            'ingredients' => 'required',
        ]);

        $ingredientsId = request('ingredients');

        $recipes = Recipe::whereHas('ingredients', function ($query) use ($ingredientsId) {
            $query->whereIn('ingredients.id', $ingredientsId);
        })->get();

        return view('recipes', [
            'recipes' => $recipes
        ]);
    }

    public function recipes()
    {
        $recipes = Recipe::orderBy('created_at', 'DESC')->paginate(5);

        return view ('everyRecipes', [
            'recipes' => $recipes
        ]);
    }

    public function recipesWithCategory(int $id)
    {
        $recipes = Recipe::where('category_id', '=', $id)->get();

        return view('everyRecipes', [
            'recipes' => $recipes
        ]);
    }
}
