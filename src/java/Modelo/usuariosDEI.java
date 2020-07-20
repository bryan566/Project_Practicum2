
package Modelo;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

/**
 *
 * @author bryan
 */
public class usuariosDEI implements validar {
    Connection con;
    Conexion pi=new Conexion();
    PreparedStatement ed;
    ResultSet ni;
   
    

    @Override
    public int validar(usuarios user) {
        int r=0;
        String sql="Select * from usuarios where Usuario=? and Contraseña=?";
        try{
            con=pi.getConnection();
            ed=con.prepareStatement(sql);
            ed.setString(1, user.Usuario);
            ed.setString(2, user.Contraseña);
            ni=ed.executeQuery();
            while(ni.next()){
                r=r+1;
                user.setUsuario(ni.getString("Usuario"));
                user.setContraseña(ni.getString("Contraseña"));
                
            }
            if(r==1){
                return 1;
            }else{
                return 0;
            }
            
        }catch (Exception e){
            return 0;
        }
        
    }
    
    
}
