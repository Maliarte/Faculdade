import java.util.Scanner;
/*
* 2. [PIRAMIDE] Escreva um programa que mostre no console uma pirâmide de números, 
* com um número de linhas entre 1 e 9, fornecido pelo usuário. 
* Caso o número esteja fora do limite, mostrar mensagem de erro e solicitar novamente o número. 
* Por exemplo, se o número de linhas for 4, o resultado será:
*    1
*   121
*  12321
* 1234321
*/

public class Piramide {

	public static void main(String[] args) {
		int numero;
		boolean espaco = true;
		int linha = 1;
		int space;

		mensagem(1);

		System.out.println("Escolha um número entre 1 e 9 para exibir a pirâmide ou 0 para sair.");
		numero = validaNumero();

		space = numero;

		for (int i = 1; i <= numero;) {
			if (espaco) {
				for (int s = 1; s < space; s++) {
					System.out.print("  ");
				}
				espaco = false;
			}
			System.out.print(i + " ");
			if (i == linha) {
				for (int j = linha - 1; j > 0; j--) {
					System.out.print(j + " ");
				}
				for (int s = 1; s < space; s++) {
					System.out.print("  ");
				}
				System.out.println();
				espaco = true;
				linha++;
				space--;
				i = 1;
			} else {
				i++;
			}
			if (linha - 1 == numero)
				break;
		}

		mensagem(2);
	}

	public static void mensagem(int opcao) {
		if (opcao == 1) {
			System.out.println("=============================================");
			System.out.println("============== SISTEMA PIRAMIDE =============");
			System.out.println("=============================================\n\n");
		} else if (opcao == 2) {
			System.out.println("\n\n=============================================");
			System.out.println("======= OBRIGADO PELO USO DO PROGRAMA =======");
			System.out.println("=============================================\n\n");
		}
	}

	public static int validaNumero() {
		int numero;

		Scanner input = new Scanner(System.in);
		String vlr = input.next();
		numero = tryParseInt(vlr, -1);

		while (!(numero >= 0 && numero <= 9)) {
			System.out.println("VALOR INVÁLIDO!");
			System.out.println("Escolha um número entre 1 e 9 para exibir a pirâmide ou 0 para sair.");
			vlr = input.next();
			numero = tryParseInt(vlr, -1);
		}
		input.close();
		return numero;
	}

	public static int tryParseInt(String value, int defaultValue) {
		try {
			return Integer.parseInt(value);
		} catch (Exception e) {
			return defaultValue;
		}
	}

}
