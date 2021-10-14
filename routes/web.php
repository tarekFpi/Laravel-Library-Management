<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
  return view('index');

// return view('index');
});

//Admin Login
Route::get('/Adminlog',function(){
  return redirect()->route('login');
});

Auth::routes();
 // password.chang
Route::get('/password.chang','App\Http\Controllers\Auth\ConfirmPasswordController@confromPassword')->name('password.chang');

//Register
Route::get('/register.page','App\Http\Controllers\Auth\RegisterController@Register_page')->name('register');

//Change password Form
Route::get('/change_password','App\Http\Controllers\Auth\ResetPasswordController@changePassword')->name('change_password');

///Update password
Route::post('/update.password','App\Http\Controllers\Auth\ResetPasswordController@update_password')->name('update.password');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//install  npm install && npm run dev
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/Book_nameAdd','App\Http\Controllers\Home_controller@Book_NameAddFrom');
//book name Add
Route::post('/BookName_store','App\Http\Controllers\Home_controller@BookNameAdd');

//Book Name insert single data
Route::get('/single_data/{bookName}','App\Http\Controllers\Home_controller@Single_name');

//Book Name Search
Route::get('/BookNameSearch','App\Http\Controllers\Home_controller@Book_NameSearch');

//Book Name Update
Route::post('/bookName_update/{searial_id}','App\Http\Controllers\Home_controller@Update');

 //Book_Name_delete
 Route::get('/Book_name_delete','App\Http\Controllers\Home_controller@Destroy');


 //Departmet name Add From
 Route::get('/Department_From','App\Http\Controllers\Home_controller@Department_Insert_from');

 //Departmet name Add
 Route::post('/Department_Name_store','App\Http\Controllers\Home_controller@Department_Insert');

  //publication  Add From  publication_Name_store
  Route::get('/publication_From','App\Http\Controllers\Publication_controller@publication_Insert_from');

   //publication_Name_store
   Route::post('/publication_Name_store','App\Http\Controllers\Publication_controller@publication_Insert');

   //Publication Name update
   Route::post('/pub_name_update/{searial_id}','App\Http\Controllers\Publication_controller@Update');

//publication name Delete
Route::get('/publication_name_delete','App\Http\Controllers\Publication_controller@Destroy');

  // New Book Add Form
   Route::get('/BookAdd_Form','App\Http\Controllers\Book_add_controller@BookInsert_from');

   // New Book Add
 Route::post('/Book_insert','App\Http\Controllers\Book_add_controller@New_BookInsert');

//Book Add For Live search
Route::get('/Book_search','App\Http\Controllers\Book_add_controller@Book_Live_Search');

   // New Book Extis
   Route::get('/BookAdd_exits/{book_id}','App\Http\Controllers\Book_add_controller@getPublicationName');
   //get Book Name
   Route::get('/BookName_exits/{book_id}','App\Http\Controllers\Book_add_controller@getBook_Name');

   // get Book Department Name
   Route::get('/departName_exits/{book_id}','App\Http\Controllers\Book_add_controller@getDepartment_Name');

//Book Update
Route::post('/book_update/{serial_id}','App\Http\Controllers\Book_add_controller@Update');

//Book Delete
Route::get('/book_delete','App\Http\Controllers\Book_add_controller@Destroy');

 // Student Add from
 Route::get('/student_Add','App\Http\Controllers\Student_add_controller@student_AddForm');

 // Student Add
Route::post('/student_insert','App\Http\Controllers\Student_add_controller@Student_Add');

//student Infromation update
Route::post('/studnet_inf_update/{serial_id}','App\Http\Controllers\Student_add_controller@studnet_infromationUpdate');

// studnet infromation search {search_data}
Route::get('student_search/','App\Http\Controllers\Student_add_controller@search_student');

// Show All Student  problem
 // Route::get('showAll_student/','App\Http\Controllers\Student_add_controller@index');

 //Student information Delete
 Route::get('Delete_Student/','App\Http\Controllers\Student_add_controller@Destroy');

 // Issue Book student Add from
  Route::get('/Issue_AddForm','App\Http\Controllers\Issue_book_contorller@Issue_BookForm');

//Book Issue for Live search
Route::get('/Book_issue_search','App\Http\Controllers\Issue_book_contorller@Issue_BookLiveSearch');


   // live search book id get Book Name
   Route::get('/search_bookName/{search_id}','App\Http\Controllers\Issue_book_contorller@Live_search_Book_Name');

  // live book id search get book page Number
  Route::get('/search_bookPage/{search_id}','App\Http\Controllers\Issue_book_contorller@Live_search_Book_page');

//  live book id search get book publication Name
Route::get('/search_bookpublication/{search_id}','App\Http\Controllers\Issue_book_contorller@Live_search_Book_publication');


//  live book id search get book Deparment Name
Route::get('/search_bookDepartment/{search_id}','App\Http\Controllers\Issue_book_contorller@Live_search_Book_Department');

// live book id search get book Sell price
Route::get('/search_bookPrice/{search_id}','App\Http\Controllers\Issue_book_contorller@Live_search_Book_Sellprice');

//search student Name
Route::get('/search_studentName/{search_stRoll}','App\Http\Controllers\Issue_book_contorller@Live_search_Student_Name');

//Live_search_Student_Image
Route::get('/search_Image/{search_stRoll}','App\Http\Controllers\Issue_book_contorller@Live_search_Student_Image');

//issue Book Stock qunaitiy
Route::get('/search_stockQuantity/{book_Id}','App\Http\Controllers\Issue_book_contorller@Live_search_stockQuanity');

// quanitiy Update match stock
Route::get('/update_Quantity/{book_Id}','App\Http\Controllers\Issue_book_contorller@Update_quantity');

//Book issue infromation update
Route::post('/bookIssue_update/{serial_id}','App\Http\Controllers\Issue_book_contorller@Update');

//book issue delete
Route::get('/book_issue_delete','App\Http\Controllers\Issue_book_contorller@Destroy');

//Book Issue insert
Route::post('/Issue_insert/{student_roll}','App\Http\Controllers\Issue_book_contorller@Studnet_IssueBook');

//student login Longin_student
Route::get('/longin_student','App\Http\Controllers\Student_login_cont@Studnet_Login');

//Studnet Login successFull infromation show
  Route::get('/lg_student_page/{user_gmail}','App\Http\Controllers\Student_login_cont@Studen_infromation');

//issue_book.show /{student_roll}
Route::get('/issue_book.show/{Roll}','App\Http\Controllers\Student_login_cont@Studen_IssueBook');

 //Book Stock
 Route::get('/Stock','App\Http\Controllers\Stock_book_controller@StockBook');


 //Stock Live search Data
 Route::get('/stock_search','App\Http\Controllers\Stock_book_controller@StockBook_LiveSearch');

 //profile

   Route::get('/profile','App\Http\Controllers\Student_login_cont@index')->name('profile');

//Route::get('/users/{user}', [UserController::class, 'show']);




