import java.util.Scanner;

/*
 * 1. [IMPERIAL] No sistema imperial são utilizadas as seguintes medidas
 * lineares: 1 pé = 12 polegadas 1 jarda = 3 pés 1 milha = 1760 jardas
 * Considerando que 1 polegada equivale a 25,3995 milímetros no sistema métrico,
 * faça o programa que converta um valor informado em centímetros para cada uma
 * das unidades do sistema imperial citadas acima.
 */

public class Imperial {

	public static void main(String[] args) {

		double resultado, medida;
		int opcao;

		mensagem(1);

		System.out.println("=========================================================");
		System.out.print("Informe a medida desejada em centímetros ou 0 para sair: ");
		Scanner input = new Scanner(System.in);
		medida = validaMedida();
		
		System.out.println("\n=========================================================\n");
		while (medida > 0) {
			medida *= 10.00;

			System.out.println("=========================================================");
			System.out.println("Informe a conversão desejada ou 0 para sair:");
			System.out.println("1 - Em Polegadas");
			System.out.println("2 - Em Pés");
			System.out.println("3 - Em Jardas");
			System.out.println("4 - Em Milhas");
			System.out.println("=========================================================\n");

			opcao = validaOpcao();

			while (opcao > 0 && opcao < 5) {

				switch (opcao) {
				case 1: // mm -> polegada
					resultado = convertePolegadaMilimetro(medida, 2);
					System.out.printf("\n%.2f cm equivalem a %.2f polegadas.\n", (medida / 10), resultado);
					break;
				case 2: // mm -> pé
					resultado = convertePePolegada(convertePolegadaMilimetro(medida, 2), 2);
					System.out.printf("\n%.2f cm equivalem a %.2f pés.\n", (medida / 10), resultado);
					break;
				case 3: // mm -> jarda
					resultado = converteJardaPe(convertePePolegada(convertePolegadaMilimetro(medida, 2), 2), 2);
					System.out.printf("\n%.2f cm equivalem a %.2f jardas.\n", (medida / 10), resultado);
					break;
				case 4: // mm -> milha
					resultado = converteMilhaJarda(
							converteJardaPe(convertePePolegada(convertePolegadaMilimetro(medida, 2), 2), 2), 2);
					System.out.printf("\n%.2f cm equivalem a %.6f milhas.\n", (medida / 10), resultado);
					break;
				default:
					break;
				}

				System.out.println("\n=========================================================");
				System.out.println("Informe a conversão desejada ou 0 para sair:");
				System.out.println("1 - Em Polegadas");
				System.out.println("2 - Em Pés");
				System.out.println("3 - Em Jardas");
				System.out.println("4 - Em Milhas");
				System.out.println("=========================================================\n");

				opcao = validaOpcao();

			}

			System.out.println("=========================================================");
			System.out.print("Informe a medida desejada em centímetros ou 0 para sair: ");
			medida = validaMedida();
			System.out.println("\n=========================================================\n");
		}
		input.close();
		
		mensagem(2);
	}

	public static double convertePePolegada(double valor, int opcao) {

		if (opcao == 1) {
			// resultado em polegada
			return (valor * 12.00);
		} else if (opcao == 2) {
			// resultado em pe
			return (valor / 12.00);
		}

		return -1;
	}

	public static double converteJardaPe(double valor, int opcao) {

		if (opcao == 1) {
			// resultado em pe
			return (valor * 3.00);
		} else if (opcao == 2) {
			// resultado em jarda
			return (valor / 3.00);
		}
		return -1;
	}

	public static double converteMilhaJarda(double valor, int opcao) {

		if (opcao == 1) {
			// resultado em jarda
			return (valor * 1760.00);
		} else if (opcao == 2) {
			// resultado em milha
			return (valor / 1760.00);
		}
		return -1;
	}

	public static double convertePolegadaMilimetro(double valor, int opcao) {
		if (opcao == 1) {
			// resultado em milimetro
			return (valor * 25.3995);
		} else if (opcao == 2) {
			// resultado em polegada
			return (valor / 25.3995);
		}
		return -1;
	}

	public static void mensagem(int opcao) {
		if(opcao == 1) {
			System.out.println("=============================================");
			System.out.println("====== SISTEMA DE CONVERSÃO DE MEDIDAS ======");
			System.out.println("=============================================\n\n");
		}else if(opcao == 2) {
			System.out.println("=============================================");
			System.out.println("======= OBRIGADO PELO USO DO PROGRAMA =======");
			System.out.println("=============================================\n\n");
		}
	}

	public static int validaOpcao() {

		Scanner input = new Scanner(System.in);
		String vlr = input.next();
		int opt = tryParseInt(vlr, -1);

		while (!(opt >= 0 && opt < 5)) {
			System.out.println("\nVALOR INCORRETO!\nInforme uma das opções abaixo.");
			System.out.println("=========================================================");
			System.out.println("Informe a conversão desejada ou 0 para sair:");
			System.out.println("1 - Em Polegadas");
			System.out.println("2 - Em Pés");
			System.out.println("3 - Em Jardas");
			System.out.println("4 - Em Milhas");
			System.out.println("=========================================================\n");

			vlr = input.next();
			opt = tryParseInt(vlr, -1);
		}

		return opt;
	}
	
	public static double validaMedida() {
		Scanner input = new Scanner(System.in);
		String vlr = input.next();
		double medida = tryParseDouble(vlr, -1);
		
		while (!(medida >= 0)) {
			System.out.println("\nVALOR INCORRETO!");
			System.out.println("=========================================================");
			System.out.print("Informe a medida desejada em centímetros ou 0 para sair: ");
			
			vlr = input.next();
			medida = tryParseDouble(vlr, -1);
		}
		
		return medida;
	}

	public static int tryParseInt(String value, int defaultVal) {
		try {
			return Integer.parseInt(value);
		} catch (NumberFormatException e) {
			return defaultVal;
		}
	}
	
	public static double tryParseDouble(String value, double defaultVal) {
		try {
			return Double.parseDouble(value);
		} catch (Exception e) {
			return defaultVal;
		}

	}

}
