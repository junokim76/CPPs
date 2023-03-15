/*
 * PrimeiroAcessoSGBD.java
 *
 * Created on 11 de Junho de 2005, 06:45
 *
 * To change this template, choose Tools | Options and locate the template under
 * the Source Creation and Management node. Right-click the template and choose
 * Open. You can then make changes to the template in the Source Editor.
 */

package acessobd;

/**
 *
 * @author Java
 */
import java.math.BigDecimal;
import java.net.*;
import java.sql.*;
import java.util.Scanner;
import javax.swing.JOptionPane;


public class PrimeiroAcessoSGBD {
    private static Connection con = null;
    private Scanner entrada = new Scanner(System.in);
    //Connection con = null;
    /**
     * Creates a new instance of PrimeiroAcessoSGBD
     */
    public PrimeiroAcessoSGBD() {
    }
    
    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        System.out.println("teste de acesso ao banco de dados MySQL\n");
        PrimeiroAcessoSGBD bd = new PrimeiroAcessoSGBD();
        bd.estabelecerConexao();
        bd.consultarDados();
        //bd.inserirDadosComStatement();
        bd.inserirDadosComPreparedStatement();
        bd.consultarDados();
        bd.encerrarConexao();
    }
    
    private void consultarDados() {
        Statement stm = null;
        //String strSQL = "SELECT ID, TITULO, AUTOR FROM LIVRO;";
        String strSQL = "SELECT ID, TITULO, AUTOR FROM livro;";
        try {
            stm = con.createStatement();
            ResultSet rs = stm.executeQuery(strSQL);
            while (rs.next()) {
                String linha = rs.getInt("ID") + " - " +
                        rs.getString("TITULO") + " - " +
                        rs.getString("AUTOR");
                System.out.println("Livro:" + linha);
            }
        }catch(SQLException e) {
            System.out.println("SQL Exception... ");
            e.printStackTrace();
        } finally {
            try {
                stm.close();
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
        System.out.println("select realizado\n");
    }
    
    private void estabelecerConexao() {
        try {
            String driver = "com.mysql.cj.jdbc.Driver";
            String url = "jdbc:mysql://localhost:3306/db_livros_23?useTimezone=true&serverTimezone=UTC";
            String user = "root";
            String pass = "";
            
            Class.forName(driver);
            
            con = DriverManager.getConnection(url, user, pass);
            
            System.out.println("Sucesso na conexao! \n");
        } catch(ClassNotFoundException e) {
            System.out.println("excecao ClassNotFound...");
            e.printStackTrace();
        } catch(SQLException e) {
            System.out.println("SQL Exception... ");
            e.printStackTrace();
        } 
    }
    
    private void encerrarConexao() {
        try {
            con.close();
        } catch(SQLException onConClose) {
            System.out.println("erro ao encerrar a conexao");
            onConClose.printStackTrace();
        }
    }

    private void inserirDadosComStatement() {
        System.out.print("Informe o TITULO do livro: ");
        String titulo = entrada.nextLine();
        System.out.print("Informe o AUTOR do livro: ");
        String autor = entrada.nextLine();
        String sqlQuery = 
                "insert into livro (titulo, autor) "
                + "values ( '" + titulo + "','" + autor + "');";
        
        Statement stm = null;
       
        try {
            stm = con.createStatement();
            stm.executeUpdate(sqlQuery);
        } catch (SQLException ex) {
            ex.printStackTrace();
        } finally {
            try {
                stm.close();
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
    }
    
    private void inserirDadosComPreparedStatement() {
        System.out.print("Informe o TITULO do livro: ");
        String titulo = entrada.nextLine();
        System.out.print("Informe o AUTOR do livro: ");
        String autor = entrada.nextLine();
        String sqlQuery = 
                "insert into livro (titulo, autor) "
                + "values (?, ?);";

        PreparedStatement pstm = null;
       
        try {
            pstm = con.prepareStatement(sqlQuery);
            pstm.setString(1, titulo);
            pstm.setString(2, autor);
            pstm.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        } finally {
            try {
                pstm.close();
            } catch (SQLException ex) {
                ex.printStackTrace();
            }
        }
    }
}
