/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package maintest;

import entity.Categoria;
import entity.Produto;

/**
 *
 * @author aluno
 */
public class MainTest {
    public static void main(String[] args) {
        Produto p1 = new Produto();
        p1.setId(10);
        p1.setNome("Tenis");
        p1.setDescricao("Runner");
        p1.setPreco(200);
        //p.preco =-200;
        Categoria c1 = new Categoria();
        c1.setId(1);
        c1.setDescricao("Calçado");
        p1.setCategoria(c1);
        
        System.out.println("Produto: " +p1);
        System.out.println("Produto: " +p1.getPreco() + " Categoria: " + c1.getDescricao());
    }
    
}
