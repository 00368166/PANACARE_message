#include "stdio.h"

char respuesta[] = {'s','i'};
int letras = 0,numeros = 0, simbolo = 0;
char letras_str[1000],numeros_str[1000],simbolo_str[1000],temp;

void num(){
  if (temp >= 48 && temp <= 57){
    printf("\t--- Has ingresado un numero ---\n");
    numeros_str[numeros] = temp;
    numeros++;
  }
}
void let(){
  if ((temp >= 65 && temp <= 90) || (temp >= 97 && temp <= 122)) {
    printf("\t--- Has ingresado una letra ---\n");
    letras_str[letras] = temp;
    letras++;
  }
}

void simb(){
  if ((temp < 65 || temp > 90) || (temp < 97 || temp > 122) || (temp < 48 || temp > 57)) {
  printf("\t--- Has ingresado un simbolo ---\n");
  simbolo_str[simbolo] = temp;
  simbolo++;
}
}

int main(int argc, char const *argv[]) {

  printf("\t\t** Vamos a contar caracteres **\n\n");

  while (respuesta[0] == 's' || respuesta[0] == 'S') {
    printf("Ingresa un caracter:  ");

    scanf(" %c",&temp);
num();
let();
simb();

  printf("Deseas insertar otro caracter? S/N?\n");
fflush(stdin);
gets(respuesta);
  }
printf("\t\t** Vamos a conocer los resultados **\n\n");
printf("\t--- Has ingresado %i numeros ---\n", numeros);
printf("\t--- Has ingresado %i letras ---\n", letras);
printf("\t--- Has ingresado %i simbolos ---\n", simbolo);

  return 0;
}
