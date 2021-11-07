#include <stdio.h>

typedef struct {
    int _cap; // Capacidade do vetor
    int _len; // Tamanho usado no vetor
    int *vet; // Ponteiro para o vetor dinâmico
} VetorInt;


int main(){

    int tamanho = 10;
    int *a[tamanho];
    VetorInt v;
    v._cap = tamanho;
    v._len = 0;
    v.vet = a[tamanho];
    
    printf("%p", v.vet);
    return 0;
}