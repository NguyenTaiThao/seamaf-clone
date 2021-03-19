<?php
 namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

 class NavComposer
 {
     public $movieList = [];
     /**
      * Create a movie composer.
      *
      * @return void
      */
     public function __construct()
     {
         $this->categories = Category::all();
     }

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
         $view->with('categories', end($this->categories));
     }
 }