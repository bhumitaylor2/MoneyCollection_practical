 <?php 
 function maxMoney($n, $k){
	  $sum = 0;
	  $i = 1;
	  $smallest = 0;
	  $smallValArr = array();
	  for($i= 1 ; $i <= $k ; $i++){
	  		$smallest =  $i + 0 ;
	  		if($smallest <= $k && $k >= 3){
	  				array_push($smallValArr, $smallest);		
	  		}
	  }
	  if(!empty($smallValArr)){
	  	//find minimum unlucky no.
	  	$k = min($smallValArr); 	
	  }
	  for($i=1; $i <= $n;$i++){
	  		//do sum of collected money one by one student
	  		$sum = $sum+$i;
	  		//skip unlucky number of collected money
	  		if($sum == $k  ){
	  		 	$sum = $sum-$i;
	  		}
	  }
	  return $sum%1000000007;
  } 

  $collectedMoneyCase1 = maxMoney(2,2);
  $collectedMoneyCase2 = maxMoney(2,1);
  $collectedMoneyCase3 = maxMoney(3,3);
  echo "Case 1 OutPut: ".$collectedMoneyCase1. "<br>" ;
  echo "Case 2 OutPut: ".$collectedMoneyCase2. "<br>" ;
  echo "Case 3 OutPut: ".$collectedMoneyCase3."<br>" ;
?>

