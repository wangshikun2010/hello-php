<?php
function amortizationTable($number,$Repayments,$balance,$Interset) {
	//round函数将结果四舍五入保留两位小数点
	$PaymentInterest = round($balance * $Interset,2);
	$paymentPrincipal = round($Repayments - $PaymentInterest,2);
	$newBalace = round($balance - $paymentPrincipal,2);
	echo "<tr>
		  <td>$paymentNum</td>;
		  <td>\$".number_format($balance,2)."</td>
		  <td>\$".number_format($Repayments,2)."</td>
		  <td>\$".number_format($PaymentInterest,2)."</td>
		  <td>\$".number_format($paymentPrincipal,2)."</td>
		  </tr>";

	if ($newBalace > 0) {
		$number++;
		amortizationTable($number,$Repayments,$balance,$Interset);
	} else {
		exit;
	}
}

$balance = 200000.00;
$interestRate = 0.0575;
$Interset = 0.0575 / 12;
$termLength = 30;
$paymentsPerYear = 12;
$paymentNumber = 1;

$totalPayments = $termLength * $paymentsPerYear;
$intCalc = 1 + $interestRate / $paymentsPerYear;
$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
(pow($intCalc,$totalPayments) - 1);
$periodicPayment = round($periodicPayment,2);

echo "<table>";
echo "<tr>
		<td>payment Number</td>
		<td>Balance</td>
		<td>Pryment</td>
		<td>Interest</td>
		<td>Principal</td>
	 </tr>";
amortizationTable($number,$Repayments,$balance,$Interset);
echo "</table>";