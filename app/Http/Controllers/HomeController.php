<?php

namespace App\Http\Controllers;

use App\Models\car_images;
use App\Models\cars;
use App\Models\pricings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home(){
        $data = DB::table('car_images')->get();
        // return $data;
        return view('home'); 
    }

    public function Collection(){
        $weekback = date('Y-m-d', time() + (60 * 60 * 24 * -15) );
        // $cars=cars::select('cars.id','brand','model', 'variant', 'regdate','usedkm', 'fueltype','bookflag','sellingprice','bookdate','images','main_image')->leftJoin('pricings','cars.id','=','pricings.carid')->join('car_images', 'cars.id', '=', 'car_images.carid')->where('car_images.main_image','=','1');

        $cars=cars::select('cars.id','brand','model', 'variant','regional_speck','status','usedkm', 'fueltype','bookflag','pricings.sellingprice','mfgDate','bookdate','car_images.images','car_images.main_image')->leftJoin('pricings','cars.id','=','pricings.carId')->join('car_images', 'cars.id', '=', 'car_images.carId')->where('car_images.main_image','=','1');
        $cars =$cars->where('bookflag', '=', '1');
        // $cars =$cars->where('status', '=', '1');
        $cars =$cars->where('status', '=', '0');
        
        $cars =$cars->orWhere('bookdate', '>', $weekback);
        $cars = $cars->paginate(21);
        $total_cars=$cars->count();
        
        return view('pages.collection',compact('cars','total_cars'));
    }
    public function carDetails ($id){
        // return $id;
        $cars=cars::find($id);
        $price=pricings::select('sellingprice')->where('carid',$id)->get();
        // return $price;
        $images=car_images::select('images')->where('carid',$id)->get();

        return view('pages.car',compact('cars','price','images'));
    }

    public function searchBySort(Request $request)
    {
        $sort=$request->sort;
         
        $cars=cars::select('cars.id','brand','model', 'variant','regional_speck','status','usedkm', 'fueltype','bookflag','pricings.sellingprice','mfgDate','bookdate','car_images.images','car_images.main_image')->leftJoin('car_images', 'cars.id', '=', 'car_images.carId')->leftjoin('pricings','cars.id','=','pricings.carId')->where('car_images.main_image','=','1')->where('bookflag', '=', '1')->where('status', '=', '0')->orderBy('pricings.sellingprice',$sort)->paginate(21);

        $total_cars=$cars->count();
        return view('pages.collection', compact('cars','total_cars'));
    }

    public function searchByFilter(Request $request)
    {
        $kms=explode('-',$request->kms);
        $price=explode('-',$request->price);
        $brand=$request->brand;
        if(!empty($kms[0]) && !empty($kms[1]))
        {
            $cars=cars::select('cars.id','brand','model', 'variant','regional_speck','status','usedkm', 'fueltype','bookflag','pricings.sellingprice','mfgDate','bookdate','car_images.images','car_images.main_image')->leftJoin('car_images', 'cars.id', '=', 'car_images.carId')->leftjoin('pricings','cars.id','=','pricings.carId')->where('car_images.main_image','=','1')->where('bookflag', '=', '1')->where('status', '=', '0')->whereBetween('usedkm',[$kms[0],$kms[1]])->paginate(21);
        }
        else if(!empty($price[0]) && !empty($price[1]))
        {
             $cars=cars::select('cars.id','brand','model', 'variant','regional_speck','status','usedkm', 'fueltype','bookflag','pricings.sellingprice','mfgDate','bookdate','car_images.images','car_images.main_image')->leftJoin('car_images', 'cars.id', '=', 'car_images.carId')->leftjoin('pricings','cars.id','=','pricings.carId')->where('car_images.main_image','=','1')->where('bookflag', '=', '1')->where('status', '=', '0')->whereBetween('sellingprice',[$price[0],$price[1]])->paginate(21);
        }
        else if(!empty($brand))
        {
             $cars=cars::select('cars.id','brand','model', 'variant','regional_speck','status','usedkm', 'fueltype','bookflag','pricings.sellingprice','mfgDate','bookdate','car_images.images','car_images.main_image')->leftJoin('car_images', 'cars.id', '=', 'car_images.carId')->leftjoin('pricings','cars.id','=','pricings.carId')->where('car_images.main_image','=','1')->where('brand',$brand)->where('bookflag', '=', '1')->where('status', '=', '0')->paginate(21);
        }

        $total_cars=$cars->count();

        return view('pages.collection', compact('cars','total_cars'));
    }
}
