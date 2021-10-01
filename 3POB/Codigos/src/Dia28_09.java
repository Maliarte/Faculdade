import java.util.Scanner;

public class Dia28_09 {

	public static void main(String[] args) {
		GrupoDeTrabalho g1 = new GrupoDeTrabalho();
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Tamanho atual do grupo: " + g1.getTamanho());
		System.out.print("Informe o novo tamanho do grupo ou 0 para sair: ");
		int tam = GrupoDeTrabalho.tryParseInt(sc.next(), -1);
		while(tam != 0) {
			if (tam != -1) g1.setTamanho(tam);
			System.out.println("Tamanho atual do grupo: " + g1.getTamanho());
			System.out.print("Informe o novo tamanho do grupo ou 0 para sair: ");
			tam = GrupoDeTrabalho.tryParseInt(sc.next(), -1);
		}
				
		sc.nextLine();
		System.out.println();
		
		while (g1.getIntegrantes().size() < g1.getTamanho()) {
			System.out.print("Informe o nome do integrante " + (g1.getIntegrantes().size() + 1) + ": ");
			String nome = sc.nextLine().toUpperCase();
			g1.getIntegrantes().add(nome);
		}
		System.out.println("\nLista dos integrantes do grupo: ");
		for (String integrante : g1.getIntegrantes()) {
			System.out.println("Integrante " + (g1.getIntegrantes().indexOf(integrante) + 1) + ": " + integrante );
		}
		sc.close();
	}

}
