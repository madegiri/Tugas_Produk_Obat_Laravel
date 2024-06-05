<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use PDF;

class PDFController extends Controller
{
    /**
     * Generate a PDF file.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $products = Product::all();

        $data = [
            'products' => $products
        ];

        $pdf = PDF::loadView('products.products_pdf', $data);

        return $pdf->download('products.pdf');
    }
}
