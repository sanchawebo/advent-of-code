<?php

namespace App\Controllers\twentythree;

use App\Controllers\BaseController;
use CodeIgniter\Files\FileCollection;

class Home extends BaseController
{
    public function index()
    {
        $files = new FileCollection([
            APPPATH . 'Views/twentythree',
        ]);
        $files->removePattern('*', APPPATH . 'Views/twentythree/core');

        return view('twentythree/core/welcome', [
            'puzzles' => '',
        ]);
    }

    public function show($dayNum, $puzzleNum)
    {
        return view('twentythree/day' . $dayNum . '/puzzle' . $puzzleNum);
    }
}
