<?php
namespace Models\Calculator;

session_start();

class Calculator
{
    public static function Calculate(string $hourlyRate, string $hours, string | null $taxRate)
    {
        $payment = $hourlyRate * $hours; // Before tax calculating
        $tax = ($taxRate * $payment) / 100; // Tax calculating
        $_SESSION['Payroll']['output'] = $payment - $tax; // Final payment
    }
}