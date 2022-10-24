<!DOCTYPE html>
<html>
    <body>

        <form name="exo3Input" method="get" style="display:flex; flex-direction:column; padding:8px; width:25%; margin-bottom:20px">
            <label for="number">Enter N:</label>
            <input type="number" name="n" required><br>
            <label for="number">Enter K:</label>
            <input type="number" name="k" required>
            <input type="submit" name= "submit" style="margin-top:8px; width:50%;">
        </form>

        <?php
            if (isset($_GET['submit']) ){

                if ((isset($_GET['n'])) && (isset($_GET['k'])))
                {
                    $n= $_GET['n'];
                    $k=$_GET['k'];

                    $arrStrNum = array();
                    $tempVal="";
            
                    for($i=1; $i<=$n; $i++){
                        array_push($arrStrNum, (string)$i);
                    }
            
                    $arrLen = count($arrStrNum);
            
                    for($i=0; $i<$arrLen; $i++){
                        for($j=0; $j<$arrLen-1-$i; $j++){
                            if(strcmp($arrStrNum[$j], $arrStrNum[$j+1])>0){ //comparing elements all over the array then swaping them if element> element+1
                                $tempVal = $arrStrNum[$j];
                                $arrStrNum[$j] = $arrStrNum[$j+1];
                                $arrStrNum[$j+1] = $tempVal;
                            }
                        }
                    }
            
                    $key = array_search((string)$k, $arrStrNum); //Search for the index of the given numeber K in the alphabetically ordered number list
                    
                    echo implode(", ", $arrStrNum); //show list of number separated by comma(,)
                    echo "<br><br>";
                    echo $key!=false? "Index: ".($key+1): "Could not found this number in list"; // if number k is found output the number's index in the array else output the given message
                }
            }
       

        ?>

    </body>
</html>
