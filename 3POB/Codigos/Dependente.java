package br.nom.belo.marcio.boamorte;

public class Dependente {
	
	private String nome;
	private int idade;

	public Dependente(String nome, int idade) {
		this.nome = (nome == null || nome.isEmpty()) ? "(sem nome)" : nome;
		this.idade = (idade < 0) ? 66 : idade;
	}

	public String getNome() {
		return this.nome;
	}

	public int getIdade() {
		return this.idade;
	}

}
