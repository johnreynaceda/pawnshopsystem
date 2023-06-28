<?php



Route::prefix('administrator')->middleware(['auth'])->group(function(){

Route::get('/dashboard', function(){
return view('admin.index');
})->name('admin.dashboard');


//MAINTENANCE
Route::get('/users', function(){
return view('admin.maintenance.user.index');
})->name('admin.users');

Route::get('/roles', function(){
return view('admin.maintenance.role.index');
})->name('admin.role');

Route::get('/branches', function(){
return view('admin.maintenance.branch.index');
})->name('admin.branches');


//MANAGE
Route::get('/interests', function(){
    return view('admin.manage.interest.index');
})->name('admin.interest');
Route::get('/category', function(){
    return view('admin.manage.category.index');
})->name('admin.category');

});
