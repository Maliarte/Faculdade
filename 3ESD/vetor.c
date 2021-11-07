typedef struct {
    int _cap; // Capacidade do vetor
    int _len; // Tamanho usado no vetor
    int *vet; // Ponteiro para o vetor dinâmico
} VetorInt;

VetorInt * CriarVetorInt(int cap){
    int tamanho = 10;
    int *a[tamanho];
    VetorInt v;
    v._cap = tamanho;
    v._len = 0;
    v.vet = a[tamanho];

    return ;
}