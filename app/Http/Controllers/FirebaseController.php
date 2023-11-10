<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/laravel-firebase-dfd14-firebase-adminsdk-dpkrn-ff96cc2c57.json')
            ->withDatabaseUri('https://laravel-firebase-dfd14-default-rtdb.firebaseio.com');

        $database = $firebase->createDatabase();

        $blog = $database
        ->getReference('blog');

        // echo '<pre>';
        dd($blog->getvalue());
        // echo '</pre>';
    }
}
