package ViacaoTartaruga;


public class Veiculo {
	private boolean[] capacidade;
	private String origem;
	private String destino;

	public Veiculo (int capacidade, String origem, String destino) {
		this.capacidade = new boolean[capacidade];
		this.origem = origem;
		this.destino = destino;
	}
	
	public int getNumAssentosDisponiveis() {
		int disponiveis = 0;
		
		for (boolean i : capacidade) {
			if (i == false) {
				disponiveis++;
			}
		}
		return disponiveis;
	}
	
	public int getNumAssentos() { return capacidade.length; }
	
	public String getOrigem() { return origem; }
	
	public String getdestino() { return destino; }
	
	public boolean comprar() {
		
		if(getNumAssentosDisponiveis() > 0) {
			for (int i = 0; i < capacidade.length; i++) {
				if(capacidade[i] == false) {
					capacidade[i] = true;
					break;
				}
			}
			return true;
		}
		return false;
	}
}
