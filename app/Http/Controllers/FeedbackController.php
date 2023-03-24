<?php

namespace App\Http\Controllers;

use App\Classes\FeedbackFactory;
use App\Classes\FeedbackFactoryDb;
use App\Classes\FeedbackFactoryFile;
use App\Classes\TestFabric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function save(Request $request) {
        $input = $request->validate([
            'name' => 'required|min:2|max:10',
            'phone' => 'required|size:11',
            'feedback' => 'required|min:15|max:200'
        ]);
        $testFabric = new TestFabric();
        $testFabric->doTest($request->all());
    }
}
