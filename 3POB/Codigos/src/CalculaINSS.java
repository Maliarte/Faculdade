import javax.swing.JOptionPane;

public class CalculaINSS {

	public static void main(String[] args) {
		
		System.out.println("Calcula INSS");
		
		String salarioString;
		do {
			salarioString = JOptionPane.showInputDialog(null, "Entre seu salário");
			if(salarioString != "") {
				double salario = Double.parseDouble(salarioString);
				double inss = salario * 11 / 100;
				System.out.println("O INSS é " + inss);
		}
		
		}while(salarioString != "");
	}
	

}