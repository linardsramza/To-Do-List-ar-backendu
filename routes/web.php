<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $todoitems = \App\ToDoItem::get();
    return view("todolist", [
        "items" => $todoitems,
    ]);
});

Route::post("/", function (){
    $item = new \App\ToDoItem;
    $item->body = \Request("body", "NOTHING WAS WRITTEN");
    $item->is_done = false;

    $item->save();

    $todoitems = \App\ToDoItem::get();
    return view("todolist", [
        "items" => $todoitems,
    ]);
});

Route::get('/delete/{id}', function ($id) {
    $todoitem = \App\ToDoItem::find($id);
    if ($todoitem == null) {
        return redirect("/");
    }
    $todoitem->delete();
    
    return redirect("/");
});

Route::get('/toggle/{id}', function ($id) {
    $todoitem = \App\ToDoItem::find($id);
    if ($todoitem == null) {
        return redirect("/");
    }
    if ($todoitem->is_done) {
        $todoitem->is_done = false;
    } else {
        $todoitem->is_done = true;
    }
    $todoitem->save();
    
    return redirect("/");
});


// Route::get('/', function () {
//     $galadarbaarticles = \App\galadarbaarticle::get();
//     return view('startalapa',[
//         "galadarbaarticles" => $galadarbaarticles,
//     ]);
   
// });

// Route::get('/blogaieraksts/{id}', function ($id) {
//     $galadarbaarticles = \App\galadarbaarticle::find($id);


//     return view('blogaieraksts',[
//         "galadarbaarticles" => $galadarbaarticles,
//     ]);
   
// });

// Route::get('/contact', function () {
//     return view('statiskalapa');
   
// });

// Route::post('/', function () {
//     $article = new \App\galadarbaarticle;
//     $article->body = \Request("body", "Nothing was written");
//     $article->head = \Request("head", "Nothing was written");
//     $article->created_at = now();
//     $article->updated_at = now();
   
//     $article->save();

//     $galadarbaarticles = \App\galadarbaarticle::get();
//     return view('startalapa',[
//         "galadarbaarticles" => $galadarbaarticles,
//     ]);
// });



















// Route::get('/', function () {
    
//     $galadarbaarticle = \App\galadarbaarticle::find(1);
//     dd($galadarbaarticle->body);
// });