<?php
                                //      array shift function
// $ar=array(100,2,3,4,5,6,7,8,9);
//  $sum=array_shift($ar);
// echo ($sum);

                                    //      array filter function
// function myfun($x)
// {
//    return $x%2==1;
// }
// $ar=array(100,33,55,77,99,90,21);
// $store=array_filter($ar,'myfun');
// print_r($store);


                                    //      flip function

// $ar=["name"=>"BMW","model"=>"benz","year"=>"1990"];
// $store=array_flip($ar);
// print_r($store);     

                                    //      filter function
//     function even($x)
//     {
//         if($x%2==0)
//         {
//             return true;
//         }
//         else
//         {
//             return false;
//         }
        
//     }
// $ar=array(1,2,3,4,5,6,7);
// $fil=array_filter($ar,'even');

// echo " <pre>";
// print_r($fil);
// echo " </pre>";

                                //      pop function

// $ar=array("one","two","three","four","five");
// $pop_element=array_pop($ar);
 
// echo $pop_element;
 

                                //      push function

// $ar= [11,21,31,41,51,55];
//  array_push($ar,'pushed element');
// print_r($ar);  

                                //       reduce function
  
// function fun($x,$y)
// {
//     return $x.'--'.$y;
// }
// $ar=["pune","delhi","nagpur","ahemednagar"];

// $reduce=array_reduce($ar,'fun');
// echo $reduce;

                                //      replace function

// $ar=[1,2,3,4,5,6,6];    
// $arr=["swift","alto","volvo","jcb"];

// $new=array_replace($ar,$arr);
// print_r($new);

                                //      array replace recursive

// $a=array("a"=>array("first"),"b"=>array("seconf"));
// $b=array("c"=>array("third"),"d"=>array("fourth","five","six"));
// echo "<pre>";
// print_r(array_replace_recursive($a,$b));
// echo "</pre>";


                                //      chunk function

// $name =  array("kiran","rushi","rama","ashish");
// $assoc=[
//     "kiran"=>"33",
//     "rushi"=>"21",
//     "rama"=>"55",
//     "ashish"=>"76"
// ];
// echo "<pre>";
// print_r(array_chunk($assoc,2,true));
// echo "</pre";

                              //  flip function
 
// $store = ["friends"=>"5","brothers"=>"4","arrays"=>"44","seens"=>"11"];
// $flipArray=array_flip($store);

// echo "<pre>";
// print_r($flipArray);
// echo "</pre";


                                //      map function
    
//     function map($num)
//     {
//         return ($num * $num);
//     }

// $ar = array(0,1,2,3,4,5,6,7);

// $map = array_map('map',$ar);
// echo "<pre>";
// print_r($map);
// echo "</pre>";

                            //  merge function

// $color = ["a"=>"red","b"=>"yellow","c"=>"blue"];
// $ar = [11,22,33,44,55,66];
// $name = ["first","second","third","fourth"];
 
// $mrg = array_merge($name,$ar,$color);

// echo "<pre>";
// print_r($mrg);
// echo "</pre>";

                            //      merge recursive function

// $color = ["a"=>"red","b"=>"yellow","c"=>"blue"];
// $store = ["friends"=>"5","a"=>"4","arrays"=>"44","a"=>"11"];

// echo "<pre>";
// print_r(array_merge_recursive($color,$store));
// echo "</pre>";

                        //      rand function       //

//  $rand = ["jamkhed","nagar","pune","mumbai","delhi"];

//  $store = array_rand($rand,2);

//  print_r($store);


                        //      reverse function

// $ar = [11,22,33,44,55,66,77];
// $rev = array_reverse($ar);

// echo "<pre>";
// print_r($rev);
// echo "</pre>";


                        //      search function 

// $srch = ["a"=>"tomato","b"=>"batata","c"=>"cabbage","d"=>"onion"];

// $ar = [11,22,33,44,55,66,77];
// echo array_search(77,$ar);

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);
// echo " its work";


                            //      slice function

// $ar = [11,22,33,44,55,66,77];

// $slice = array_slice($ar,3);
// print_r($slice);


                            //      splice function 

// $ar = [11,22,33,44,55,66,77];
// $color = ["red","blue","yellow","white","orange"];
// array_splice($ar,2,4,$color);

// echo "<pre>";
// print_r($ar);
// echo "</pre>";

                            //      sum function

// $sum = [1,2,3,4,5];
// $total = array_sum($sum);
// echo $total;

                            //      unique function 

// $ar = [11,1,11,44,55,1,55];

// $uniq = array_unique($ar);
// print_r($uniq);

                            //      shift function

// $ar = ["first","second","third"];
// $shift = array_shift($ar);
// print_r($shift);
// echo " <br>";
// print_r($ar);

                            //       unshift function

// $ar = ["first","second","third"];
//  array_unshift($ar,"five");

//  echo "<pre>";
// print_r($ar);
// echo "</pre>";


                            //      value function 


// $color = ["a"=>"red","b"=>"blue","c"=>"yellow","d"=>"white","e"=>"orange"];
// $values=array_values($color);
// echo "<pre>";
// print_r($values);
// echo "</pre>";


                            //          






















                            












?>