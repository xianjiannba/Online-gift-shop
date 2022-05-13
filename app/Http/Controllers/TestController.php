<?php

namespace App\Http\Controllers;

use App\Models\Admin\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\User;
use App\Models\Admin\Item;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail as FacadesMail;
use mysql_xdevapi\Table;

class TestController extends Controller
{
    //

    public function adduser(Request $request){
        $model = new User();
        $model -> Name = $request->input('Name');
        $model -> Username = $request->input('Username');
        $model -> Password = $request->input('Password');
        $model -> Address = $request->input('Address');
        $model -> Email = $request->input('Email');;
        $model -> log = '0';
        $result = $model->save();
        return view('/');

    }

    public function showitem(Request $request){

        $Item = Item::find($request->input('Id'));

        return view('change',compact('Item'));

    }

    public function changeitem(Request $request){
        $Item = Item::find($request->input('Id'));

        $Item->Item = $request->input('Item');
        $Item->Price = $request->input('Price');
        $Item->Remaining = $request->input('Remaining');

        $result=$Item -> save();
        dd($result);
    }
//登录
    public function login(Request $request){


        $User = DB::table('user')->where('Username', $request->input('fname'))->first();
        if($User == null){echo "error!";}

        $Password = $User->Password;

        $Password1=$request->input('password');


        if($Password == $Password1){
            $db=DB::table('user');
            $db->where('id','=',$User->ID)->update(['log'=>'1']);
            return view('user',compact('User'));}
           else {echo "Username or Password is wrong!";}

    }

    public function loginif(){
        $db=DB::table('user');
        $User = $db->where('log','1')->first();
        if($User!=null){return view('user',compact('User'));}

        else return view('login');
    }



    public function showitem1(){
        $data = Item::paginate(10);

        return view('showitem1',compact('data'));


    }

    public function showitemFurniture(){
        $data = DB::table('item')->where('Category','=','Furniture')->paginate(10);

        return view('ShowitemFurniture',compact('data'));

    }

    public function showitemDailylife(){
        $data = DB::table('item')->where('Category','=','Dailylife')->paginate(10);

        return view('ShowitemDailylife',compact('data'));

    }

    public function showitemAppliance(){
        $data = DB::table('item')->where('Category','=','Appliance')->paginate(10);

        return view('ShowitemAppliance',compact('data'));

    }

    public function showitemJewelry(){
        $data = DB::table('item')->where('Category','=','Jewelry')->paginate(10);

        return view('ShowitemJewelry',compact('data'));

    }

    public function showitemcosmetics(){
        $data = DB::table('item')->where('Category','=','cosmetics')->paginate(10);

        return view('Showitemcosmetics',compact('data'));

    }


    //愿望单创建
    public function createwishlist(Request $request){
        $db=DB::table('user');
        $User = $db->where('log','1')->first();

        $Wish = new Wishlist();
        $Wish -> Listuserid = $User->ID;
        $Wish->Festival = $request->input('Festival');
        $Wish->Deliverydate = $request->input('Deliverydate');
        $Wish->Finish = '0';
        $Wish->save();

        return redirect('continueadd');
    }






    //添加商品
    public function additem(Request $request){
        $db=DB::table('listitem');
        $db1=DB::table('list');
        $list=$db1->where('Finish','=','0')->first();


        $rst1 = $db-> insert([
            'Itemid'=> $request->input('Id'),
            'Itemlistid'=> $list->Listnumber,
            'Itemamount'=> $request->input('amount'),
            'Itemprice'=> doubleval($request->Price)*doubleval($request->input('amount')),
            'Ifbuy'=>'0',
            'Item'=> $request->input('Item'),
            'Singleprice'=> $request->input('Price')
        ]);
        return redirect('showlistitem');
    }
   //展示已添加的商品
    public function showlistitem(){
        $db=DB::table('listitem');
        $db1=DB::table('list');
        $list=$db1->where('Finish','0')->first();
        $item=$db->where('Itemlistid',$list->Listnumber)->get();
        return view('Wishlist/Showlistitem',compact('item'));
    }
    //继续添加
    public function continueadd(){
        $data = Item::paginate(10);


        return view('Wishlist/Additem',compact('data'));

    }
   //添加结束
    public  function addend(){
        $db=DB::table('list');
        $list=$db->where('Finish','0')->first();

        $db->where('Finish','=','0')->update(['Finish'=>'1']);
        return view('Wishlist/Addend',compact('list'));
    }

    //用户查看wishlist列表
    public function viewwl(){


        $db1=DB::table('list');

        $db2=DB::table('user');

        $User = $db2->where('log','=','1')->first();

        $list=$db1->where('Listuserid','=',$User->ID)->get();

        return view('Wishlist/Viewwl',compact('list'));

    }

    //用户查看wishlist详细

    public function checkwl(Request $request){
        $db=DB::table('listitem');
        $db1=DB::table('list');
        $list=$db1->where('Listnumber','=',$request->Listnumber)->first();
        $item=$db->where('Itemlistid',$list->Listnumber)->get();
        return view('Wishlist/Checkwl',compact('item'));


    }

    //根据编号查询wishlist

    public function searchwl(Request $request){
        $db=DB::table('listitem');
        $db1=DB::table('list');
        $db2=DB::table('user');
        $list=$db1->where('Listnumber','=',$request->Listnumber)->first();
        $item=$db->where('Itemlistid',$list->Listnumber)->get();
        $user=$db2->where('ID','=',$list->Listuserid)->first();
        return view('Guest/gshowwl',compact('item','user','list'));

    }

    //跳转创建guest
    public function createguest(Request $request){
        $amount=$request->amount;
        $Item=$request->Item;
        $Itemlistid=$request->Itemlistid;
        $total=$request->Singleprice*$amount;

        return view('Guest/Createguest',compact('amount','Item','Itemlistid','total'));

    }

    //创建guest并跳转购物页面

    public function goshopping(Request $request){
        $amount=$request->amount;
        $Item=$request->Item;
        $Itemlistid=$request->Itemlistid;
        $total=$request->total;
        $db=DB::table('guest');

        $rst1 = $db-> insert([
            'Name'=> $request->input('Name'),
            'Email'=> $request->input('Email'),
            'Phonenumber'=> $request->input('Phonenumber'),
            'Flag'=>'0',
        ]);

        return view('Guest/Shopping',compact('amount','Item','Itemlistid','total'));
    }

    //支付成功响应页面
    public function finishshopping(Request $request){
        $db=DB::table('listitem');
        $listitem=$db->where('Item','=',$request->Item)->where('Itemlistid','=',$request->Itemlistid)->first();
        $Itemamount=$listitem->Itemamount-$request->amount;
        $Ifbuy=$listitem->Ifbuy+$request->amount;
        $db->where('Item','=',$request->Item)->where('Itemlistid','=',$request->Itemlistid)->update(['Ifbuy'=>$Ifbuy]);
        $db->where('Item','=',$request->Item)->where('Itemlistid','=',$request->Itemlistid)->update(['Itemamount'=> $Itemamount]);

        $db1=DB::table('list');
        $db2=DB::table('user');
        $db3=DB::table('guest');
        $db4=DB::table('profit');
        $re1=$db1->where('Listnumber','=',$request->Itemlistid)->first();
        $re2=$db2->where('ID','=',$re1->Listuserid)->first();

        $guest=$db3->where('Flag','=','0')->first();
        $details = [
            'name' => $guest->Name,
            'email' => $re2->Email,
            'phonenumber'=>$guest->Phonenumber,
            'person' => $re2->Name,
            'item'=>$request->Item,
            'amount'=>$request->amount
        ];

        $db3->where('Flag','=','0')->update(['Flag'=>'1']);
        $total=$db4->where('flag','=','1')->first();

        $sales=$total->profit+$request->price;
        $db4->where('flag','=','1')->update(['profit'=>$sales]);

        FacadesMail::to($details['email'])->send(new TestEmail($details));




        return view('Guest/Thanks');


    }

    //Admin登录
    public function adminlogin(Request $request){


        $User = DB::table('admin')->where('Name', $request->input('fname'))->first();
        if($User == null){echo "error!";}

        $Password = $User->Password;

        $Password1=$request->input('password');

        $profit=DB::table('profit')->first();

        if($Password == $Password1){
            return view('Admin/Adminpage',compact('User','profit'));}
        else {echo "Username or Password is wrong!";}

    }

    //获取用户列表
    public function manageuser(){

         $user=User::paginate(4);
         return view('Admin/manageuser',compact('user'));
    }

    //删除用户
    public function deleteuser(Request $request){
        $delete=DB::table('user')->where('ID','=',$request->ID)->delete();

        return redirect('manageuser');
    }

    //修改用户（显示）
    public function editusershow(Request $request){
        $user = DB::table('user')->where('ID','=',$request->ID)->first();
        return view('Admin/edituser',compact('user'));

    }

    public function Adminpage(){
        $User = DB::table('admin')->first();
        $profit=DB::table('profit')->first();
        return view('Admin/Adminpage',compact('User','profit'));

    }
    //修改用户
    public function edituser(Request $request){
        $User = User::find($request->input('ID'));
        $User->Name = $request->input('Name');
        $User->Username= $request->input('Username');
        $User->Password = $request->input('Password');
        $User->Address = $request->input('Address');
        $User->Email = $request->input('Email');

        $User -> save();

        return redirect('manageuser');
    }

    //查看订单
    public function checkorder(){
        $order=DB::table('listitem')
            ->join('list','Itemlistid','=','Listnumber')
            ->join('user','Listuserid','=','ID')
            ->where('Ifbuy','>','0')
            ->orderBy('Deliverydate','asc')
            ->paginate(20);

        return view('Admin/checkorder',compact('order'));
    }

}
