<!DOCTYPE html>
<html>
<body>

<form name="exo2Input" method="get" style="display:flex; flex-direction:column; padding:8px; width:25%; margin-bottom:20px">
    <label for="error">Enter N error:</label>
    <input type="number" name="error" min="0" max="1000" required><br>
    <label for="warning">Enter M warning:</label>
    <input type="number" name="warning" min="0" max="1000" required>
    <input type="submit" name= "submit" style="margin-top:8px; width:50%;">
</form>

<?php
    if (isset($_GET['submit']) ){

        if ((isset($_GET['error'])) && (isset($_GET['warning'])))
        {
            $N= $_GET['error'];
            $M=$_GET['warning'];
            $commit=0 ;

            if(!($N%2!=0 && $M==0)){

              while($M%$N!=0 || $M%2!=0){
                $M++;
                $commit++; //while warnings are not a factor of errors keep on correcting one error and one warning per commit
              }

              for($i=$M; $i>0; $i-=2){
                $N++;
                $commit++; // keep on correcting to warnings per commit
              }
              
              for($j=$N; $j>0; $j-=2){
                $commit++; // Keep on correcting two errors per commit
              }

              echo "<h4>Number of commit(s): ".$commit."</h4>";

            }
            else{
                echo "<h4>Number of commit(s): -1</h4>";
            }
        }
    }
?> 

</body>
</html>