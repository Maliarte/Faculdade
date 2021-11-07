package ViacaoTartaruga;

import java.util.Scanner;

public class Main {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int tamanho = 0;
		int opcao;
		System.out.print("Informe o tamanho da frota: ");
		try {
			tamanho = Integer.parseInt(sc.nextLine());
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
	
		Veiculo[] frota = new Veiculo[tamanho];
		for (int i = 0; i < frota.length; i++) {
			frota[i] = inserirVeiculo(sc);
		}
		
		if(frota.length > 0) {
			System.out.println("Escolha um Veículo ou 0 para sair: ");
			listarFrota(frota);
			opcao = Integer.parseInt(sc.nextLine());
			while(opcao > 0) {
				if(opcao <= frota.length) {
					int veiculo = opcao - 1;
					if(frota[veiculo].getNumAssentosDisponiveis() > 0) {
						boolean sucesso = frota[veiculo].comprar();
						System.out.println((sucesso == true) ? "Compra efetuada com sucesso" : "Ops! Desculpas, mas houve erro em sua compra");
					} else {
						System.out.println("Este veículo já está com sua lotação máxima.");
					}

				} else {
					System.out.println("Valor inválido. Digite o número do veículo desejado.");
				}
				System.out.println("Escolha um Veículo ou 0 para sair: ");
				listarFrota(frota);
				opcao = Integer.parseInt(sc.nextLine());
			}
		}
		
		sc.close();
		
	}
	
	public static Veiculo inserirVeiculo(Scanner scanner) {
		int capacidade = 0;
		String origem = "";
		String destino = "";
		try {
			System.out.println("Informe o total de assentos do Veículo: ");
			capacidade = Integer.parseInt(scanner.nextLine());
			System.out.println("Informe a origem do Veículo: ");
			origem = scanner.nextLine();
			System.out.println("Informe o destino do Veículo: ");
			destino = scanner.nextLine();
			Veiculo v = new Veiculo(capacidade, origem, destino);
			return v;
		} catch(Exception e) {
			System.out.println(e.getMessage());
		}
		return null;
	}
	
	public static void listarFrota(Veiculo[] veiculos) {
		for (int i = 0; i < veiculos.length; i++) {
			System.out.printf("Veículo %d: %s - %s (%d assentos disponíveis de %d)\n", i+1, 
					veiculos[i].getOrigem(), 
					veiculos[i].getdestino(), 
					veiculos[i].getNumAssentosDisponiveis(), 
					veiculos[i].getNumAssentos());
		}
	}
}
