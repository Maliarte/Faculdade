package br.nom.belo.marcio.boamorte;

public abstract class Mensalidade {
	
	public double getValorMensalidade(int idadeCliente) {
		int[] idade = {31, 41, 66};
		double[] valor = {600.00, 700.00, 1500.00};
		double vlr30AnosOuMenor = 500.00;
		double valorPlano = vlr30AnosOuMenor;
		
		for(int i = idade.length - 1; i >= 0; i--) {
			if(idadeCliente >= idade[i]) {
				valorPlano = valor[i];
				break;
			}
		}
		
		return valorPlano;
	}
	
}
