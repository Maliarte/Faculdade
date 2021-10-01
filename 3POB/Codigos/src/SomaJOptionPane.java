import javax.swing.JOptionPane;

public class SomaJOptionPane {

	public static void main(String[] args) {
String idadeString = JOptionPane.showInputDialog(null, "Entre sua idade");
		
		int idade = Integer.parseInt(idadeString);
		int anoAtual = 2021;
		int anoNascimento = anoAtual - idade;
		
		JOptionPane.showMessageDialog(null, "Seu ano de nascimento deve ser " + anoNascimento);

	}

}
