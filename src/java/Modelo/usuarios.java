
package Modelo;

/**
 *
 * @author bryan
 */
public class usuarios {
    int ID;
    String Usuario;
    String Contraseña;

    public usuarios() {
    }

    public usuarios(int ID, String Usuario, String Contraseña) {
        this.ID = ID;
        this.Usuario = Usuario;
        this.Contraseña = Contraseña;
    }

    public int getID() {
        return ID;
    }

    public void setID(int ID) {
        this.ID = ID;
    }

    public String getUsuario() {
        return Usuario;
    }

    public void setUsuario(String Usuario) {
        this.Usuario = Usuario;
    }

    public String getContraseña() {
        return Contraseña;
    }

    public void setContraseña(String Contraseña) {
        this.Contraseña = Contraseña;
    }
    
    
    
    
    
}
