package CalcINSS;

public abstract class AliquotaINSS {
	protected double valorINSS(double salario) {
		double[] pisoSalario = {720.01, 1200.01, 2400.01};
		double[] aliquota = {0.0900, 0.1100, 0.00};
		double aliquota720OuMenor = 0.0765;
		double valorINSS = salario * aliquota720OuMenor;
		
		for(int i = pisoSalario.length - 1; i >= 0; i--) {
			if(salario >= pisoSalario[i]) {
				valorINSS = aliquota[i] * salario;
				break;
			}
		}
		
		return valorINSS;
	}
}
