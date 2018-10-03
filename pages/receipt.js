

if($_SERVER["REQUEST_METHOD"]=="POST"){ 
        

        $totalprice = $_POST["price"];


        $total=0;
        
        for($i=0; $i< count($totalprice); $i++){
            $total += $totalprice[$i];
        }

$total = $totalPrice*(1-0.07);

document.getElementById("total")= $total;