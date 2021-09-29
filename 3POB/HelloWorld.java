import java.util.Scanner;

public class HelloWorld {
    public static void main(String[] args){
        System.out.println("Hello World!!!!");
        System.out.println();
        System.out.println("Entre com um número");
        Scanner sc = new Scanner(System.in);
        int numero = sc.nextInt();
        System.out.println("O número é: " + numero);
        sc.close();
    }
}