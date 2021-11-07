package CavalinhoDoBozo;
import java.util.Random;

public class Cavalo {
	private String nome;
	private String avatar;
	private double distanciaPercorrida;
	
	public Cavalo(ENomeCavalo nome) {
		this.nome = nome.name();
		if (nome == ENomeCavalo.BRANQUINHO) {
			this.avatar = "B>";
		} else if (nome == ENomeCavalo.MALHADINHO) {
			this.avatar = "M>";
		} else {
			this.avatar = "P>";
		}
		this.distanciaPercorrida = 0.00;
	}

	public double correr() {
		Random random = new Random();
		this.distanciaPercorrida += random.nextDouble();
		mostrar();
		return this.distanciaPercorrida;
	}
	
	private void mostrar() {
		int espacos = (int)this.distanciaPercorrida;
		int chegada = 60;
		System.out.printf("%10s:",this.nome);
		for(int i = 0; i <= espacos; i++) {
			System.out.print(" ");
		}
		System.out.printf("%s", this.avatar);
		chegada -= espacos;
		for(int i = 1; i <= chegada; i++) {
			System.out.print(" ");
		}
		System.out.println("|x| CHEGADA");

	}
}
