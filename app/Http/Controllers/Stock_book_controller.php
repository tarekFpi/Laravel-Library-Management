<?php

namespace App\Http\Controllers;

use App\Models\Book_add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Stock_book_controller extends Controller
{
   function StockBook(){
   
 //$sum_quantity =DB::select('select SUM(Quanitiy) as purchase_unit,BookId, BookName, Delivary_price FROM book_adds GROUP BY BookId');

 $stock=  DB::select('select *FROM stock');
 
 return view('Bookstock',compact('stock'));   
   }

   function StockBook_LiveSearch(Request $request){
    if($request->ajax()) {
 
  //$search = '%'.$request->search_data.'%';
      $output="";
      
$stock= DB::select("select *FROM stock  where  BookId LIKE '%$request->search_data%' OR BookName LIKE '%$request->search_data%' OR publication_Name LIKE '%$request->search_data%' OR DepartmentName LIKE '%$request->search_data%' ");
 
foreach ($stock as  $item) {
 
$output.='<tr>'.

'<td>'.$item->BookId.'</td>'.
'<td>'.$item->BookName.'</td>'.
'<td>'.$item->publication_name.'</td>'.
'<td>'.$item->DepartmentName.'</td>'.
'<td>'.$item->page.'</td>'.
'<td>'.$item->Delivary_price.'</td>'.
 '<td>'.$item->parchas_unit.'</td>'.
 '<td>'.$item->sell_unit.'</td>'.
'<td>'.$item->parchas_unit-$item->sell_unit.'</td>'.  
'<td><img src='.$item->image.' height=150px width=200px /></td>'. 
'</tr>';

}  
 
 return Response($output);
 

 }

   }
}
