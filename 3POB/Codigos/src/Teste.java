import java.util.Scanner;

public class Teste {

	public static void main( String[] args ) {
        
        try (Scanner input = new Scanner( System.in )) {
 
            // Annual interest rate
            System.out
                    .print( "Enter annual interest rate, for example 0.5, no percent sign:" );
            double annualInterestRate = input.nextDouble();
 
            // Monthly interest rate
            double monthlyInterestRate = annualInterestRate / 1200;
 
            // Number of years
            System.out.print( "Enter number of years, for example 5: " );
            int numberOfYears = input.nextInt();
 
            // Investment amount
            System.out
                    .print( "Enter investment amount, for example 145000.95: " );
            double loanAmount = input.nextDouble();
 
            // Calculate payments
            double monthlyPayment = loanAmount
                    * monthlyInterestRate
                    / ( 1 - 1 / Math.pow( 1 + monthlyInterestRate,
                            numberOfYears * 12 ) );
            double totalPayment = monthlyPayment * numberOfYears * 12;
 
            System.out.println( "The monthly payment is "
                    + (int) ( monthlyPayment * 100 ) / 100.0 );
 
            System.out.println( "Accumulated value is "
                    + (int) ( totalPayment * 100 ) / 100.0 );
 
        }
    }

}
