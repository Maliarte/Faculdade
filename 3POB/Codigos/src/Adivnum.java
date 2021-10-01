import java.util.Random;
import java.util.Scanner;

/*
 * 3. [ADIVNUM] O jogo Adivinha Número consiste de dois participantes que devem adivinhar um número sorteado de 1 a 1000. 
 * A cada turno, um jogador tem a chance de tentar adivinhar o número. 
 * Ao errar o palpite, o computador indica se o número secreto é maior ou menor e passa a vez para o oponente. 
 * Seu programa deverá perguntar o nome dos dois jogadores e sortear um deles para iniciar o jogo. 
 * Use a função estática random() da classe Math contida no pacote java.util;
 * 
 * Abaixo o exemplo de um jogo. Em negrito o que é fornecido como entrada pelo console para o programa.
 * 
 * Jogador 1: Ana
 * Jogador 2: Pedro
 * Jogador sorteado para comecar: Ana
 * Palpite Ana: 300
 * Computador: numero eh maior
 * Palpite Pedro: 700
 * Computador: numero eh maior
 * Palpite Ana: 600
 * Computador: numero eh maior
 * Palpite Pedro: 800
 * Computador: numero eh menor
 * Palpite Ana: 750
 * Computador: numero eh maior
 * Palpite Pedro: 755
 * Computador: numero eh menor
 * Palpite Ana: 751
 * Computador: Ana ganhou!
 */

public class Adivnum {

	public static void main(String[] args) {
		int MINIMO = 0;
		int MAXIMO = 1000;

		Random random = new Random();

		int definido = random.nextInt(1000);
		int chute;
		int tentativa = 1;
		String jogador1, jogador2, player;
		int inicia;
		boolean primeiro = true;

		Scanner in = new Scanner(System.in);

		System.out.println("Bem vindo ao jogo de adivinhação\n\n");
		
		System.out.print("Jogador 1, informe seu nome: ");
		jogador1 = in.next();
		System.out.print("Jogador 2, informe seu nome: ");
		jogador2 = in.next();

		inicia = random.nextInt(1);
		
		if(inicia == 1) {
			player = jogador1;
		}else {
			player = jogador2;
		}
		
		chute = 0;
		for (int i = 1; i <= MAXIMO; i++) {
			
			if(primeiro) {
				System.out.printf("\n\n%s, Escolha um número entre %d e %d.\n\n", player, MINIMO, MAXIMO);
				primeiro = false;
			}else if(player == jogador1) {
				player = jogador2;
				System.out.printf("%s, Escolha um número entre %d e %d.\n\n", player, MINIMO, MAXIMO);
			}else {
				player = jogador1;
				System.out.printf("%s, Escolha um número entre %d e %d.\n\n", player, MINIMO, MAXIMO);
			}
				
			System.out.printf("\nTentativa %d de %d. Escolha o número:  ", tentativa, MAXIMO);
			chute = in.nextInt();

			while (chute < MINIMO || chute > MAXIMO) {
				System.out.printf("\n\nERRO! Valor fora do especificado.\n");
				System.out.printf("\nEscolha um número entre %d e %d.\n", MINIMO, MAXIMO);
				System.out.printf("Tentativa %d de %d. Escolha o número:  ", tentativa, MAXIMO);
				chute = in.nextInt();
			}

			if (chute == definido) {
				break;
			} else if (chute > definido) {
				System.out.printf("\n%s, seu chute foi muito ALTO.\n=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=\n\n", player);
			} else {
				System.out.printf("\n%s, seu chute foi muito BAIXO.\n=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=x=\\n\n", player);
			}

			tentativa++;
		}

		System.out.println("\n\n           Fim do jogo.\n\n");

		if (chute == definido) {
			System.out.printf("%s...     Parabens você ganhou.\n", player);
			System.out.printf("Você acertou na %dª tentativa ", tentativa);
		} else {
			System.out.println("Sinto muito... Você perdeu.\n");
			System.out.println("     Tente outra vez.\n\n");
		}
		in.close();

	}

}
