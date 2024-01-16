<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function generatePrimes($limit) {
    $primes = [];
    for ($i = 2; $i <= $limit; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

$limit = 50;
$primeNumbers = generatePrimes($limit);

echo "Prime numbers up to $limit: " . implode(', ', $primeNumbers);
?>
<br><br><br>
<?php
function generateFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$numberOfFibonacci = 10; 
$fibonacciSeries = generateFibonacci($numberOfFibonacci);

echo "First $numberOfFibonacci Fibonacci numbers: " . implode(', ', $fibonacciSeries);
?>
