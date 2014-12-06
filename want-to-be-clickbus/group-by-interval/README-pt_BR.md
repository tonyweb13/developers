Group By Interval
============

O Problema
----------
Dado um grupo desordenado de n�meros inteiros, positivos ou negativos, dividir a lista em grupos ordenados de acordo com o range especificado: 

*Aten��o: O algoritmo de ordena��o faz parte da solu��o do problema, n�o pode ser utilizada func�es da linguagem para realiza-la*

Exemplos:
---------
* 
 **Entrada:** 
 ```
 Range: 10,  
 Number Set: [10, 1, -20,  14, 99, 136, 19, 20, 117, 22, 93,  120, 131]  
 ```
 **Resultado:**  
 ```
 {[-20], [1, 10], [14, 19, 20], [22], [93, 99], [117, 120], [131, 136]}
 ```

* 
  **Entrada:**  
  ```
  Range: 15,  
  Number Set: [10, 1, -20,  14, 99, 136, 19, 20, 117, 22, 93, 120, 131]    
  ```
  **Resultado:**  
  ```
  {[-20], [1, 10, 14], [19, 20, 22], [93, 99], [117, 120], [131], [136]}
  ```

* 
 **Entrada:**  
 ```
 Range: 15,  
 Number Set: [10, 1, A,  14, 99, 133, 19, 20, 117, 22, 93,  120, 131]  
 ```    
 **Resultado:** *throw InvalidArgumentException*

* 
  **Entrada:**  
  ```
  Range: NULL,  
  Number Set: [ ]  
  ```
  **Resultado:** [Empty Set]
