package ObjUnico;

public class Teste {
	public static void main(String[] args) {

		Unica u = Unica.pegaInstancia();

		Unica v = Unica.pegaInstancia();

		Unica x = Unica.pegaInstancia();

		System.out.println((u == v) && (x == v)); // Deve retornar true

	}
}
