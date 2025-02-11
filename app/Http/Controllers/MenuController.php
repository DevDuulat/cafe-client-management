<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = MenuCategory::all();
        $menus = Menu::all();

        return view('menu', compact('categories', 'menus'));  // Отправляем их в представление menu.blade.php
    }

    public function category($category)
    {
        $categories = MenuCategory::all();  // Получаем все категории меню
        $menus = Menu::where('menu_category_fk', $category)->get();  // Получаем меню по выбранной категории

        return view('menu', compact('categories', 'menus'));  // Отправляем в представление
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
