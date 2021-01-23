<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function store()
    {
        Products::create($this->validateRequest());
    }

    protected function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image_path' => 'required',
        ]);
    }
}