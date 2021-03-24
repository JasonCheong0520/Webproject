<?php
    $gred=95;

    if($gred>100){
        echo "Error";
    }
        elseif($gred>=90&$gred<=100){
            echo "Gred A!";
    }
            elseif($gred>=80&$gred<90){
                 echo "Gred B!";
            }
                 elseif($gred>=70&$gred<80){
                    echo "Gred C!";
                }
                    elseif($gred>=60&$gred<70){
                        echo "Gred D!";
                    }
                        else{
                            echo "Gred E!";
                        }
?>