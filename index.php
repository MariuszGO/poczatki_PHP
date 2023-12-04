<?php


    for($i = 0; $i <= 100; $i++)
    {
        $tablica_liczb[$i] = true;
    }

   $j = 2;

    for($i = 2; $i<=Sqrt($n);$i++)
    {
        if ($tablica_liczb[$i] == true)
        {
            for($j = $i*$i; $j<=$n;$j=$j+$i)
            {
                $tablica_liczb[$j] = false;
            }
        }

    }

    



        for ($i = 2; $i <=100; $i++)
        {
            if ($tablica_liczb[$i] == true)
            {
                echo $i. " ";
            }
        }





?>

    
