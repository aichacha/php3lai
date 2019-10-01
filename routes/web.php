<?php



//Route::get('/{tennguoidung}', function ($tennguoidung = "") {
 //   return view('welcome');
//});

// use App/Models/User;
// Route::get('/', function (){
// return view('long')	
// });

Route::get('long', function (){
$users = factory(App\Models\User::class, 10)
->make()
->toArray();

return view('long', [
 'users' => $users

]);
});
  

Route::get('post', function (){
$posts = factory(App\Models\Post::class, 10)
->make()
->toArray();
return view('post', [
 'posts' => $posts

]);
});
  