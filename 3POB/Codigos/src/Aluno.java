import java.util.Scanner;
import javax.swing.JOptionPane;

public class Aluno {

	public static void main(String[] args) {
		String s2 = "Dude"; 
		  s2 = s2.concat(" rapa");
		  System.out.println(s2); 
		  s2 = s2.toUpperCase();
		  System.out.println(s2);
		  String s3 = s2;
		  String s4 = "DUDE RAPA";
		  if(s2 == s3) { 
			  System.out.println("Se apontam pra mesma referência vai dar igual"); ////
		  }else { 
			  System.out.println("Se apontam pra referência diferentes vai dar diferente");
		  } 
		  if(s2.equals(s3)) { 
			  System.out.println("Se contém o mesmo valor vai dar igual");
		  }else {
			  System.out.println("Se os valores forem diferentes vai dar diferente");
		  } 
		  
		  System.out.println("========= X ======== X ========");
		  if(s4 == s3) {
			  System.out.println("Se apontam pra mesma referência vai dar igual"); ////
		  }else { 
			  System.out.println("Se apontam pra referências diferentes vai dar diferente");
		  }
		  if(s4.equals(s3)) { 
			  System.out.println("Se contém o mesmo valor vai dar igual");
		  }else {
			  System.out.println("Se os valores forem diferentes vai dar diferente");
		  }
		  Scanner entrada = new Scanner(System.in);
		  
		  System.out.println("Informe o número 1: ");
		  int v1 = entrada.nextInt();
		  System.out.println("Informe o número 2: "); 
		  int v2 = entrada.nextInt();
		  System.out.println("Resultado da soma: " + (v1 + v2));
		  entrada.close();
		  
		  
		  String nome = JOptionPane.showInputDialog(null, "Entre com o seu nome");
		  if(nome != null) JOptionPane.showMessageDialog(null, "Olá, " + nome);

	}

}
