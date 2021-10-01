import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class GrupoDeTrabalho {
	private int tamanho;
	private List<String> integrantes;

	//********* Métodos Assessores **********//
	
	public int getTamanho() {
		return tamanho;
	}
	
	public void setTamanho(int tamanho) {
		if (tamanho >= 1 && tamanho <= 3) {
			this.tamanho = tamanho;
		} else {
			System.out.println("\nValor inválido. O tamanho deve ser entre 1 e 3.\nTamanho definido como 1.\n");
			this.tamanho = 1;
		}
	}
	
	public List<String> getIntegrantes() {
		return integrantes;
	}
	
	public void setIntegrantes(List<String> integrantes) {
		this.integrantes = integrantes;
	}
	
	//********* Construtor **********//
	
	public GrupoDeTrabalho() {
		this.setTamanho(1);
		this.setIntegrantes(new ArrayList<>());
	}

	//********* Métodos estáticos **********//
	
	public static int tryParseInt(String value, int defaultValue) {
		try {
			return Integer.parseInt(value);
		} catch (NumberFormatException e) {
			System.out.println("\nParâmetro inválido. Digite um valor numérico inteiro.\n");
			return defaultValue;
		}
	}

	public static void main(String[] args) {
		
		GrupoDeTrabalho g1 = new GrupoDeTrabalho();
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Tamanho atual do grupo: " + g1.getTamanho());
		System.out.print("Informe o novo tamanho do grupo ou 0 para sair: ");
		int tam = tryParseInt(sc.next(), -1);
		while(tam != 0) {
			if (tam != -1) g1.setTamanho(tam);
			System.out.println("Tamanho atual do grupo: " + g1.getTamanho());
			System.out.print("Informe o novo tamanho do grupo ou 0 para sair: ");
			tam = tryParseInt(sc.next(), -1);
		}
				
		sc.nextLine();
		System.out.println();
		
		while (g1.getIntegrantes().size() < g1.tamanho) {
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
