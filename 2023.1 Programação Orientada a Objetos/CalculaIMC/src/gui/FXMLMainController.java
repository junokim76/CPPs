/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/javafx/FXMLController.java to edit this template
 */
package gui;

import java.net.URL;
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.Spinner;
import javafx.scene.control.SpinnerValueFactory;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author aluno
 */
public class FXMLMainController implements Initializable {

    @FXML
    private Button btnOK;
    @FXML
    private Button btnLimpar;
    @FXML
    private TextField tfNome;
    @FXML
    private TextField tfAltura;

    @FXML
    private ComboBox<String> cbSexo;
    private final String[] sexo = {"Masculino", "Feminino"};
    
    @FXML
    private Spinner<Integer> spIdade;
    @FXML
    private TextField tfPeso;
    @FXML
    private Label lblNomeCompleto;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        cbSexo.setPromptText("Escolha o sexo");
        cbSexo.getItems().addAll(sexo);
        SpinnerValueFactory<Integer> idade = new SpinnerValueFactory.IntegerSpinnerValueFactory(1,150);
        spIdade.setValueFactory(idade);
        
    }    

    @FXML
    private void handleButtonCalcular(ActionEvent event) {
        String nome = tfNome.getText();
        float peso = Float.parseFloat(tfPeso.getText());
        float altura = Float.parseFloat(tfAltura.getText());
        Integer idade = spIdade.getValue();
        String sexo = cbSexo.getValue();
        
        float imc = peso / (altura * altura);
        
          String resultado;
        if(imc < 24.9) {
            resultado = "Normal";
        } else if(imc < 30) {
            resultado = "Sobrepeso";
        } else if(imc < 40) {
            resultado = "Obesidade";
        } else {
            resultado = "Obesidade grave";
        }
        
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Resultado IMC!");
        alert.setHeaderText("Resultado IMC");
        alert.setContentText("Nome: " + nome +
                             "\nSexo: " + sexo +
                             "\nAltura: " + altura +
                             "\nPeso: " + peso +
                             "\n\nIMC: + " + imc +
                             "\nClassificação: " + resultado);
        Optional<ButtonType> result = alert.showAndWait();
        if(result.get() == ButtonType.OK){
            tfNome.clear();
            tfAltura.clear();
            tfPeso.clear();
            cbSexo.setValue(null);
            spIdade.getValueFactory().setValue(1);
            tfNome.requestFocus();
            
        }
        System.out.println(result);
        }

    @FXML
    private void handleButtonLimpar(ActionEvent event) {
        tfNome.clear();
        tfAltura.clear();
        tfPeso.clear();
        //cbSexo.setPromptText("Selecione o sexo");
        cbSexo.setValue(null);
        spIdade.getValueFactory().setValue(1);
        tfNome.requestFocus();
        System.out.println("Prompt Text: " + cbSexo.getPromptText());
    }
           
     
  
}