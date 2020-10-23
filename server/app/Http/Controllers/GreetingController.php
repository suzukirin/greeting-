<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet($word) {
            switch ( $word ){
                case 'morning':
                $tervehdys = '朝のあいさつ';
                $saluto = 'おはようございます';
                break;
                
                case 'afternoon': 
                $tervehdys = '昼のあいさつ';
                $saluto = 'こんにちは';
                break;
                
                case 'evening':
                $tervehdys = '夕方のあいさつ';
                $saluto = 'こんばんは';
                break;
                
                case 'night':  
                $tervehdys = '夜のあいさつ';
                $saluto = 'おやすみ';
                break;
                
                default:
                echo 'aaa';
                break;
            }
                //viewのファイル場所
                return view('greeting.greet', ['tervehdys' => $tervehdys, 'saluto' => $saluto]);
                }    



                public function greet2($msg)
                { 
                return view('greeting.greet2', ['msg'=> $msg]);
                }



                public function greet3()
                { 
                    $input = ["おはよう","こんばんは", "こんにちは","おやすみ"];
                    $rand_keys = $input[array_rand($input)];

                return view('greeting.greet3', ['rand_keys'=>$rand_keys]);
                
                }

                }

            
