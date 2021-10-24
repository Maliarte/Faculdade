package br.nom.belo.marcio.boamorte;

import static org.junit.Assert.*;
import org.junit.Test;

public class ClienteTestes {
	
	@Test
	public void criaClienteValido() {
		Cliente novoCliente = new Cliente("Ana",20);
		assertEquals("Ana", novoCliente.getNome());
		assertEquals(20, novoCliente.getIdade());
		assertEquals(1, novoCliente.getMatricula());
	}
	
	@Test 
	public void clienteNomeInvalido() {
		Cliente cli = new Cliente(null,20);
		assertEquals("(sem nome)", cli.getNome());
		cli = new Cliente("",20);
		assertEquals("(sem nome)", cli.getNome());
	}
	
	@Test
	public void clienteIdadeInvalida() {
		Cliente cli = new Cliente(null,-1);
		assertEquals(66, cli.getIdade());
		cli = new Cliente(null,-14);
		assertEquals(66, cli.getIdade());
	}

	@Test
	public void criaDependenteValido() {
		Dependente dep = new Dependente("Joao",15);
		assertEquals("Joao", dep.getNome());
		assertEquals(15, dep.getIdade());
	}

	@Test 
	public void dependenteNomeInvalido() {
		Dependente dep = new Dependente(null,20);
		assertEquals("(sem nome)", dep.getNome());
		dep = new Dependente("",20);
		assertEquals("(sem nome)", dep.getNome());
	}
	@Test
	public void dependenteIdadeInvalida() {
		Dependente dep = new Dependente("Fernando",-1);
		assertEquals(66, dep.getIdade());
		Dependente dep2 = new Dependente("Fernando",-44);
		assertEquals(66, dep2.getIdade());
	}
	
	@Test
	public void clienteNumeroDependentesValido() {
		Cliente cli = new Cliente("Maria",34);
		assertEquals(0, cli.getQtdeDependentes());
		Dependente dep1 = new Dependente("Leandro",80);
		cli.adicionarDependente(dep1);
		assertEquals(1, cli.getQtdeDependentes());
		Dependente dep2 = new Dependente("Fernando",45);
		cli.adicionarDependente(dep2);
		assertEquals(2, cli.getQtdeDependentes());
		Dependente dep3 = new Dependente("Leonardo",33);
		cli.adicionarDependente(dep3);
		assertEquals(3, cli.getQtdeDependentes());
	}
	
	@Test
	public void clienteDependenteDuplicado() {
		Cliente cli = new Cliente("Maria",34);
		Dependente dep1 = new Dependente("Leandro",20);
		cli.adicionarDependente(dep1);
		Dependente dep2 = new Dependente("Leandro",80);
		boolean retorno = cli.adicionarDependente(dep2);
		assertFalse(retorno);
		assertEquals(1, cli.getQtdeDependentes());
	}
	
	@Test
	public void clienteNumeroDependentesInvalido() {
		Cliente cli = new Cliente("Maria",34);
		assertEquals(0, cli.getQtdeDependentes());
		Dependente dep1 = new Dependente("Leandro",80);
		cli.adicionarDependente(dep1);
		assertEquals(1, cli.getQtdeDependentes());
		Dependente dep2 = new Dependente("Fernando",45);
		cli.adicionarDependente(dep2);
		assertEquals(2, cli.getQtdeDependentes());
		Dependente dep3 = new Dependente("Leonardo",33);
		cli.adicionarDependente(dep3);
		assertEquals(3, cli.getQtdeDependentes());
		Dependente dep4 = new Dependente("Allan",25);
		boolean retorno =  cli.adicionarDependente(dep4);
		assertFalse(retorno);
		assertEquals(3, cli.getQtdeDependentes());
	}
	
	@Test
	public void mensalidadePlano() {
		Cliente cli1 = new Cliente("Maria",25);
		assertEquals(500.00, cli1.getValorMensalidade(),0.01);
		Cliente cli2 = new Cliente("Maria",31);
		assertEquals(600.00, cli2.getValorMensalidade(),0.01);
		Cliente cli3 = new Cliente("Maria",41);
		assertEquals(700.00, cli3.getValorMensalidade(),0.01);
		Cliente cli4 = new Cliente("Maria",66);
		assertEquals(1500.00, cli4.getValorMensalidade(),0.01);
	}
	
	@Test
	public void mensalidadePlanoComDependente() {
		Cliente cli2 = new Cliente("Maria",31);
		Dependente dep2 = new Dependente("Fernando",45);
		cli2.adicionarDependente(dep2);
		assertEquals(950.0,cli2.getValorMensalidade(),0.01);
		Dependente dep3 = new Dependente("Leonardo",15);
		cli2.adicionarDependente(dep3);
		assertEquals(1200.00,cli2.getValorMensalidade(),0.01);
	}

}
