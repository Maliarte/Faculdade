
public class Programa {

	public static void main(String[] args) {
		Ponto p1 = new Ponto();
		p1.setPontoX(3);
		p1.setPontoY(-4);

		Ponto p2 = new Ponto(5, 7);
		System.out.println(p1.getPontoX() + ", " + p1.getPontoY());
		System.out.println(p2.getPontoX() + ", " + p2.getPontoY());
	}

}
