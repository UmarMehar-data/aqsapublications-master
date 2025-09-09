<?php

namespace app\Traits;

use App\Models\Category;

trait CategoryTrait{

    function storeCategories(){
        $categories = $this->getCategories();

        foreach($categories as $category){
            Category::create($category);
        }
    }

    function getCategories(){
       return [
            ["name" => "Best Selling", "slug" => 'best-selling'],
            ["name" => "Book Sets", "slug" => 'book-sets'],
            ["name" => "Books Under 750PKR", "slug" => 'books-under-750pkr'],
            ["name" => "Children's Books", 'slug' => 'children-books'],
            ["name" => "Classics", "slug" => 'classics'],
            ["name" => "English Literature", 'slug' => "english-literature"]
       ];
    }

}
