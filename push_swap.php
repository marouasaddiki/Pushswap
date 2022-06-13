<?php
// set_time_limit(40);
$lb =[];
$ls = $argv;
$la = array_slice( $ls, 1);

$la = array_map(
    function($value) { return (int)$value; },
    $la
);

if(count($la) == 0){
    return print_r("\n");
}
if(count($la) == 1){
    return print_r("\n");
}
$temp = $la;
sort($temp);
 if($temp == $la){
   return print_r("\n");
 }
 

function sa(&$la){
   $temp = $la[0];
   $la[0] = $la[1];
   $la[1] = $temp;
    
}

function sb(&$lb){
    $temp =$lb[0];
    $lb[0]= $lb[1];
    $lb[1]=$temp;
  
    
}
function sc(&$la, &$lb){

   sa($la);
   sb($lb);
  
}

function pa(&$la, &$lb){
  $temp = array_shift($lb);
    array_unshift($la, $temp);
    
}

function pb(&$la, &$lb){
    $temp = array_shift($la);
    array_unshift($lb, $temp);
   
}
function ra(&$la){

    $start=$la[0];
    array_shift($la);
    array_push($la,$start);
    
}

function rb(&$lb){

    $end = $lb[0];
    array_shift($lb);
    array_push($lb, $end);
    
}

function rr(&$la, &$lb){
    ra($la);
    rb($lb);
    
}

function rra(&$la){
    $temp = array_pop($la);
    array_unshift($la, $temp);
    
}
function rrb(&$lb){
    $temp = array_pop($lb);
    array_unshift($lb, $temp);
}
function rrr(&$la, &$lb){
    rra($la);
    rrb($lb);
  
}



function sort_numbers(&$la, &$lb)
{
    $count =" ";
    $ls=$la;
    $temp = count($la)-1;
    $true =true;

    while($true)
    {  
         if($la[0] == min($la))
          {
           pb($la, $lb);
          $count .= 'pb ';
         }
         else{
          ra($la);
          $count .= 'ra ';
         }
         if(count($la) == 0)
         {
            $true=false;
         } 
        
    }
    $false=true;
    while($false){
        if($lb[0] == max($lb)){
            pa($la,$lb);
            $count .= 'pa ';
            
        }
          else{
              ra($lb);
              $count .= 'ra ';
          }
          if(count($lb) == 0){
              $false =false;
          }
        }
        if($temp !== $count){
            echo trim($count)."\n";
        }else{
            print_r("\n");

        }
 }
 
sort_numbers($la, $lb);

// print_r($la);