package CavalinhoDoBozo;

public class Main {

	public static void main(String[] args) {
		Cavalo c1 = new Cavalo(ENomeCavalo.BRANQUINHO);
		Cavalo c2 = new Cavalo(ENomeCavalo.MALHADINHO);
		Cavalo c3 = new Cavalo(ENomeCavalo.PRETINHO);
		
		int branquinho, pretinho, malhadinho;
		branquinho = pretinho = malhadinho = 0;
		
		while(branquinho < 60 && pretinho < 60 && malhadinho < 60) {
			branquinho = (int)c1.correr();
			pretinho = (int)c3.correr();
			malhadinho = (int)c2.correr();
			for (int i = 1; i <= 25; i++) {
				System.out.println();				
			}
		}

		System.out.println("----------------------------------------------------------------------------------");
		if(branquinho == 60 && malhadinho == 60 && pretinho == 60) {
			System.out.print(ENomeCavalo.BRANQUINHO.name() + " ");
			System.out.print(ENomeCavalo.MALHADINHO.name() + " e ");
			System.out.print(ENomeCavalo.PRETINHO.name() + " GANHARAM!!!");
		} else if (branquinho == 60 && malhadinho == 60) {
			System.out.print(ENomeCavalo.MALHADINHO.name() + " e ");
			System.out.print(ENomeCavalo.BRANQUINHO.name() + " GANHARAM!!!");
		} else if(malhadinho == 60 && pretinho == 60) {
			System.out.print(ENomeCavalo.MALHADINHO.name() + " e ");
			System.out.print(ENomeCavalo.PRETINHO.name() + " GANHARAM!!!");
		} else if (branquinho == 60 && pretinho == 60) {
			System.out.print(ENomeCavalo.BRANQUINHO.name() + " e ");
			System.out.print(ENomeCavalo.PRETINHO.name() + " GANHARAM!!!");
		} else if (branquinho == 60) {
			System.out.print(ENomeCavalo.BRANQUINHO.name() + " GANHOU!!!");
		} else if (malhadinho == 60) {
			System.out.print(ENomeCavalo.MALHADINHO.name() + " GANHOU!!!");
		} else {
			System.out.print(ENomeCavalo.PRETINHO.name() + " GANHOU!!!");
		}

	}

}
