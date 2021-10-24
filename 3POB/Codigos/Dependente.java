package br.nom.belo.marcio.boamorte;

public class Dependente {
	
	private String nome;
	private int idade;

	public Dependente(String nome, int idade) {
		this.nome = (nome == null || nome.isEmpty()) ? "(sem nome)" : nome;
		this.idade = (idade < 0) ? 66 : idade;
	}

	public String getNome() {
		// TODO Auto-generated method stub
		return this.nome;
	}

	public int getIdade() {
		// TODO Auto-generated method stub
		return this.idade;
	}

}
