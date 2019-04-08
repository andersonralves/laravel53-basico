<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');

        /*
        $this->middleware('auth')
            ->only([
                'contato',
                'categoria'
            ]);
        */

        /*
        $this->middleware('auth')
            ->except([
                'index', 'contato'
            ]);
        */
    }

    public function index()
    {
        $var1 = 123;

        $nums = [1,2,3,4,5,6,7,8,9,10];

        $names = [  ];

        return view('site.home.index', compact('var1', 'nums', 'names'));
    }

    public function contato()
    {
        return view('site.contact.index');
    }

    public function categoria( $id )
    {
        return 'Exibindo os Posts da categoria: ' . $id;
    }

    public function categoriaOp( $id = null )
    {
        return 'Exibindo os Posts da categoria: ' . $id;
    }
}
