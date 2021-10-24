package br.nom.belo.marcio.boamorte;

import java.util.ArrayList;


public class Cliente extends Mensalidade{

	private String nome;
	private int idade;
	private int matricula;
	private ArrayList<Dependente> dependentes;
	private double valorMensalidade;
	
	public Cliente(String nome, int idade) {
		this.nome = (nome == null || nome.isEmpty()) ? "(sem nome)" : nome;
		this.idade = (idade < 0) ? 66 : idade;
		this.valorMensalidade = setValorMensalidade(idade);
		this.dependentes = new ArrayList<>();
		this.matricula = 1;
	}

	public String getNome() {
		return this.nome;
	}

	public int getIdade() {
		return this.idade;
	}

	public int getMatricula() {
		return this.matricula;
	}

	public int getQtdeDependentes() {
		return dependentes.size();
	}
	
	public boolean adicionarDependente(Dependente dep1) {
		if (dep1 == null) {
			return false;
		} else if (getQtdeDependentes() >= 0 && getQtdeDependentes() < 3){
			for (Dependente dep : dependentes) {
				if(dep.getNome() == dep1.getNome())
					return false;
			}
			dependentes.add(dep1);
			this.valorMensalidade += getValorMensalidade(dep1.getIdade()) / 2;
			return true;
		}
		return false;
	}
	
	private double setValorMensalidade(int idade) {
		
		return getValorMensalidade(idade);
	}
	
	
	public double getValorMensalidade() {
		return this.valorMensalidade;
	}

}
