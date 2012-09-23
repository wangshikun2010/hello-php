<?php
// 财务管理
// 资金折现
// 时间价值
// 利率, 年利率, 月利率, 换算
// 复利
// 分期付款

function amortizationTable($number,$Repayments,$balance,$Interset) {
	//round函数将结果四舍五入保留两位小数点
	$PaymentInterest = round($balance * $Interset,2);
	$paymentPrincipal = round($Repayments - $PaymentInterest,2);
	$newBalace = round($balance - $paymentPrincipal,2);
	echo "<tr>
		  <td>$number</td>
		  <td>\$".number_format($balance,2)."</td>
		  <td>\$".number_format($Repayments,2)."</td>
		  <td>\$".number_format($PaymentInterest,2)."</td>
		  <td>\$".number_format($paymentPrincipal,2)."</td>
		  </tr>";

	if ($newBalace > 0) {
		$number++;
		amortizationTable($number,$Repayments,$newBalace,$Interset);
	} else {
		exit;
	}
}

$balance = 20000.00;
$interestRate = 0.0575;
$Interset = 0.0575 / 12;
$termLength =5;
$paymentsPerYear = 10;
$paymentNumber = 1;

$totalPayments = $termLength * $paymentsPerYear;
$intCalc = 1 + $interestRate / $paymentsPerYear;

echo "<br/>";
echo $balance * pow($intCalc,$totalPayments), PHP_EOL;

$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) /
(pow($intCalc,$totalPayments) - 1);

$periodicPayment = round($periodicPayment,2);

echo "<table border='1'>";
echo "<tr>
		<td>paymentNumber</td>
		<td>Balance</td>
		<td>Pryment</td>
		<td>Interest</td>
		<td>Principal</td>
	 </tr>";
amortizationTable($paymentNumber,$periodicPayment,$balance,$Interset);
echo "</table>";

