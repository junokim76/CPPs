/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package mainTest;

import entity.Cor;
import entity.Marca;
import entity.Modelo;
import entity.Veiculo;



/**
 *
 * @author aluno
 */
public class mainTest {
    public static void main(String[] args) {
        Veiculo v1 = new Veiculo();
        v1.setId(1);
        v1.setPlaca("CTA3778");
        v1.setObservacoes("Corsinha Forte");
        
        Cor c1 = new Cor();
        c1.setId(1);
        c1.setNome("Azul");
        v1.setCor(c1);
        
        Modelo m1 = new Modelo();
        m1.setId(1);
        m1.setDescricao("Corsa");
        v1.setModelo(m1);
        
        Marca marca = new Marca();
        marca.setId(1);
        marca.setNome("Chevrolet");
        m1.setMarca(marca);
        
        System.out.println("Veiculo: " + v1);
        
        
        
    }
    
}
