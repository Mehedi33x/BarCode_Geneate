<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        // dd($products);
        return view('product.index',compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    {

        $uniqueCode = Str::random(10);
        $barcodeGenerator = new BarcodeGeneratorPNG();
        $barcode = $barcodeGenerator->getBarcode($uniqueCode, $barcodeGenerator::TYPE_CODE_128);

        $filePath = 'barcodes/' . $uniqueCode . '.png';
        Storage::disk('public')->put($filePath, $barcode);

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'barcode'=>$uniqueCode
        ]);
        return to_route('prodcut.index');
    }
}
