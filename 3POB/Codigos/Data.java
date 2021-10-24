package br.nom.belo.marcio;

public class Data 
{
	private int dia;
	private int mes;
	private int ano;
	public Data(int ano, int mes, int dia) 
	{
		if (ehValida(ano, mes, dia)) {
			this.dia = dia;
			this.mes = mes;
			this.ano = ano;
		} else {
			this.dia = 1;
			this.mes = 1;
			this.ano = 1900;
		}
	}

	public int getDia() 
	{
		return this.dia;
	}

	public int getMes() 
	{
		return this.mes;
	}

	public int getAno() 
	{
		return this.ano;
	}

	public Data adicionarDias(int dias) 
	{
		Data dn = new Data(this.ano, this.mes, this.dia);
		int maxDoMes = obterDiasDoMes(dn.mes);
		int saldo = dias + this.dia;
		while(saldo > maxDoMes) {
			if(dn.mes == 12) {
				dn.ano++;
				dn.mes = 1;
			} else {
				dn.mes++;
			}
			saldo -= maxDoMes;
			if(saldo <= obterDiasDoMes(dn.mes)) {
				dn.dia = saldo;				
			} else {
				dn.dia = 0;
			}
			maxDoMes = obterDiasDoMes(dn.mes);
		}
		return dn;
	}
	
	private boolean ehValida(int ano, int mes, int dia) {
		int maxDoMes = obterDiasDoMes(mes);
		if (dia <= maxDoMes) {
			return true;
		}
		return false;
	}
	
	private int obterDiasDoMes(int mes) {
		int[] maxDiasDoMes = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
		return maxDiasDoMes[mes - 1];
	}
}