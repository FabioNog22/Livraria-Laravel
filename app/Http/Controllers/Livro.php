<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Livro extends Controller
{
    public function livros(){
        echo "<h1>Livros</h1>";
        echo "<li>Dom Casmurro </li>";
        echo "<li>A Barça </li>";        
        echo "<li>Meu pé de laranja lima </li>";
        echo "</ol>";
    }
}
