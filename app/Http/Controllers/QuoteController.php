<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index() {
        return view('quotes.index');
    }

    public function createIndex(Request $request) {
        return view('quotes.create');

    }

    public function createPost(Request $request) {
        // Validation
        $this->validate($request, [
            'author' => 'required|max:60|alpha',
            'quote' => 'required|max:500'
        ]);

        $authorText = ucfirst($request['author']);
        $quoteText = $request['quote'];

        var_dump($quoteText);

    }
}
