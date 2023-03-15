/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package entity;

/**
 *
 * @author aluno
 */
public class Veiculo {
    private int id;
    private String placa;
    private String observacoes;
    
    Modelo modelo;
    Cor cor;

    public Modelo getModelo() {
        return modelo;
    }

    public void setModelo(Modelo modelo) {
        this.modelo = modelo;
    }

    public Cor getCor() {
        return cor;
    }

    public void setCor(Cor cor) {
        this.cor = cor;
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getPlaca() {
        return placa;
    }

    public void setPlaca(String placa) {
        this.placa = placa;
    }

    public String getObservacoes() {
        return observacoes;
    }

    public void setObservacoes(String observacoes) {
        this.observacoes = observacoes;
    }
    
    
    
    public Veiculo() {
    
    }
    
    public Veiculo(String placa) {
        this.placa = placa;
    }
        
    /**
     * 
     * @param placa
     * @param observacoes 
     */
    public Veiculo(String placa, String observacoes) {
        this.placa = placa;
        this.observacoes = observacoes;
    }

    @Override
    public String toString() {
        return "Veiculo{" + "id=" + id + ", placa=" + placa + ", observacoes=" + observacoes + ", modelo=" + modelo + ", cor=" + cor + '}';
    }
    
    
    
    
}
