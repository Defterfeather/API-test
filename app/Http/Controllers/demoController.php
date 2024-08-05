<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class demoController extends Controller
{
    public function index() {
        $baseURL        = env('MOVIE_DB_BASE_URL');
        $imageBaseURl   = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey         = env('MOVIE_DB_API_KEY');
        $max_image      = 3;
        $max_image_item = 3;
        $max_image_tv   = 3;
        $max_image_Np   = 6;

        // Mengambil/hit API untuk banner
        $bannerResponse = Http::get("{$baseURL}/trending/movie/week", ['api_key'=> $apiKey]);

        // Persiapan variable
        $bannerArray=[];

        // check API response
        if($bannerResponse->successful()){
            $resultArray =$bannerResponse->object()->results;
            if(isset($resultArray)){
                //Looping data image
                foreach($resultArray as $item) {
                    array_push($bannerArray, $item);
                    if(count($bannerArray) == $max_image) {
                        break;
                    }
                }
            }
        }

        // hit API for top 10 movie
        $loopMovieResponse = Http::get("{$baseURL}/movie/top_rated", ['api_key'=> $apiKey]);


        // Persiapan variable top 10 movie
        $loppMovieArray=[];

        // check API response
        if($loopMovieResponse->successful()){
            $resultArray =$loopMovieResponse->object()->results;
            if(isset($resultArray)){
                //Looping data image
                foreach($resultArray as $item) {
                    array_push($loppMovieArray, $item);
                    if(count($loppMovieArray) == $max_image_item) {
                        break;
                    }
                }
            }
        }
        // hit API for top 10 movie
        $loopTv = Http::get("{$baseURL}/tv/top_rated", ['api_key'=> $apiKey]);


        // Persiapan variable top 10 movie
        $loopTvarray=[];

        // check API response
        if($loopTv->successful()){
            $resultArray =$loopTv->object()->results;
            if(isset($resultArray)){
                //Looping data image
                foreach($resultArray as $item) {
                    array_push($loopTvarray, $item);
                    if(count($loopTvarray) == $max_image_tv) {
                        break;
                    }
                }
            }
        }


        $loopNP = Http::get("{$baseURL}/movie/now_playing", ['api_key'=> $apiKey]);


        // Persiapan variable top 10 movie
        $loopNpArray=[];

        // check API response
        if($loopNP->successful()){
            $resultArray =$loopNP->object()->results;
            if(isset($resultArray)){
                //Looping data image
                foreach($resultArray as $item) {
                    array_push($loopNpArray, $item);
                    if(count($loopNpArray) == $max_image_Np) {
                        break;
                    }
                }
            }
        }


        $loopUp = Http::get("{$baseURL}/movie/upcoming", ['api_key'=> $apiKey]);


        // Persiapan variable top 10 movie
        $loopUpArray=[];

        // check API response
        if($loopUp->successful()){
            $resultArray =$loopUp->object()->results;
            if(isset($resultArray)){
                //Looping data image
                foreach($resultArray as $item) {
                    array_push($loopUpArray, $item);
                    if(count($loopUpArray) == $max_image_Np) {
                        break;
                    }
                }
            }
        }




        return view('layouts.app' ,[
            'baseURL'      => $baseURL,
            'imageBaseURL' => $imageBaseURl,
            'apiKey'       => $apiKey,
            'banner'       => $bannerArray,
            'loopMovies'   => $loppMovieArray,
            'Tv'           => $loopTvarray,
            'Np'           => $loopNpArray,
            'Up'           => $loopUpArray,
        ]);
    }
}
