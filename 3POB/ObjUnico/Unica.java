package ObjUnico;

public final class Unica {
	private static Unica instancia; 
	
	private Unica() {}
	
	public static Unica pegaInstancia() {
        if (instancia == null) {
            instancia = new Unica();
        }
        return instancia;
    }
}
