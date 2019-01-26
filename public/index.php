<?php

/*function​ ​ ShellSort​ (​$elements​)​
{$k​ =​ 0;
$length ​ =​ count​ (​ $elements​ );
$gap​ [​ 0​ ]​ ​ =​ ​ (​ int​ )​ ​ (​ $length ​ /​ ​ 2​ );
      ​ while​ (​ $gap​ [​ $k​ ]​ ​ >​ ​ 1​ )​ {
    $k​ ++;   $gap​ [​ $k​ ]=​ ​ (​ int​ )(​ $gap​ [​ $k​ -​ 1​ ]​ ​ /​ ​ 2​ );
 }
      ​ for​ (​ $i ​ =​ ​ 0​ ;​ $i ​ <=​ $k​ ;​ $i​ ++){
    $step ​ =​ $gap​ [​ $i​ ];
          ​ for​ (​ $j ​ =​ $step​ ;​ $j ​ <​ $length​ ;​ $j​ ++)​ {
        $temp ​ =​ $elements​ [​ $j​ ];
 $p ​ =​ $j ​ -​ $step;                ​
while​ (​ $p ​ >=​ ​ 0​ ​ &&​ $temp​ [​ 'price'​ ]​ ​ <​ $elements​ [​ $p​ ][​ 'price'​ ])​ {
            $elements​ [​ $p ​ +​ $step​ ]​ ​ =​ $elements​ [​ $p​ ];
$p ​ =​ $p ​ -​ $step;
}
 $elements​ [​ $p ​ +​ $step​ ]​ ​ =​ $temp;
 }
}       ​
return​ $elements;
 }*/

function ShellSort($elements)
{
    $n = 0;

    $k = 0;
    $length = count($elements);
    $gap[0] = (int)($length / 2);
    while ($gap[$k] > 1) {

        $n++;

        $k++;
        $gap[$k] = (int)($gap[$k - 1] / 2);
        for ($i = 0; $i <= $k; $i++) {

            $n++;

            $step = $gap[$i];
            for ($j = $step; $j < $length; $j++) {

                $n++;

                $temp = $elements[$j];
                $p = $j - $step;
                while ($p >= 0 && $temp['price'] < $elements [$p]['price']) {

                    $n++;

                    $elements[$p + $step] = $elements[$p];
                    $p = $p - $step;
                }
                $elements[$p + $step] = $temp;
            }
        }
    }

    echo "Число шагов : "; var_dump($n);
    echo "nlog(n): "; var_dump($length*log($length));
    echo "n*n: "; var_dump($length*$length);
    return $elements;
}

$prices5 =
    [
        ['price' => 21999, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21550, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21950, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21350, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21050, 'shop_name' => "Shop 2", "shop_link" => 'http://']
    ];

$prices10 =
    [
        ['price' => 21999, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21550, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21950, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21350, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21050, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21579, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21298, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21209, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21945, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21567, 'shop_name' => "Shop 2", "shop_link" => 'http://']
    ];

$prices15 =
    [
        ['price' => 21999, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21550, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21950, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21350, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21050, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21579, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21298, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21209, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21945, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21567, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21739, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21295, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21094, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21836, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21095, 'shop_name' => "Shop 2", "shop_link" => 'http://']
    ];

$prices20 =
    [
        ['price' => 21999, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21550, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21950, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21350, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21050, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21579, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21298, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21209, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21945, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21567, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21739, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21295, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21094, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21836, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21095, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21238, 'shop_name' => "Shop 1", "shop_link" => 'http://'],
        ['price' => 21679, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21223, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21702, 'shop_name' => "Shop 2", "shop_link" => 'http://'],
        ['price' => 21309, 'shop_name' => "Shop 2", "shop_link" => 'http://']
    ];


var_dump(ShellSort($prices5));
var_dump(ShellSort($prices10));
var_dump(ShellSort($prices15));
var_dump(ShellSort($prices20));