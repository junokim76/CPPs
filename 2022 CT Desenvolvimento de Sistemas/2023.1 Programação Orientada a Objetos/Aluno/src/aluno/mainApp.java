/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package aluno;

/**
 *
 * @author aluno
 */
public class mainApp {
    public static void main(String[] args) {
        Aluno a1 = new Aluno();
        a1.cpf = "13564797";
        a1.matricula = 98765431;
        a1.nome = "José";
        
        Aluno a2 = new Aluno(); 
        a2.cpf="9876431";
        a2.nome = "Maria";
        a2.matricula = 0004545;
        
        System.out.println("A1 => " + a1 + "\nA2 => " + a2);
               
  
    
    }

  
    
}
