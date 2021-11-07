package CalcINSS;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		int quantidade = 4;
		Funcionario[] funcionarios = new Funcionario[quantidade];
		Scanner sc = new Scanner(System.in);
		for (int i = 0; i < funcionarios.length; i++) {
			System.out.printf("Informe a matrícula do Funcionário %d: ", i+1);
			int matricula = Integer.parseInt(sc.nextLine());
			System.out.printf("Informe o nome do Funcionário %d: ", i+1);
			String nome = sc.nextLine();
			System.out.printf("Informe o salário do Funcionário %d: ", i+1);
			double salario = Double.parseDouble(sc.nextLine());;
			Funcionario f = new Funcionario(matricula, nome, salario);
			funcionarios[i] = f;
			System.out.println("------------------------------------------------");
		}
		sc.close();
		System.out.printf("%15s - %11s\n", "FUNCIONÁRIO", "INSS DEVIDO");
		for (int i = 0; i < funcionarios.length; i++) {
			System.out.printf("%15s - %.2f\n", funcionarios[i].getNome(), 
					funcionarios[i].calcularINSS(funcionarios[i].getSalario()));
		}
	}

}
