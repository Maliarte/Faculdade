// gcc -c vetor.c -o vetor.o

typedef struct {
    int _cap; // Capacidade do vetor
    int _len; // Tamanho usado no vetor
    int *vet; // Ponteiro para o vetor dinâmico
} VetorInt;

VetorInt * CriarVetorInt(int cap);          // Cria o vetor dinâmico. Retorna um ponteiro para ele.
int VetPut   (VetorInt *vi, int x);         // Adicionar um número no final do vetor. Retorna o tamanho do vetor atual (len).
int VetGet   (VetorInt *vi, int p);         // Retornar o numero na posição p. Retornar -1 caso a posição não exista.
int VetSearch(VetorInt *vi, int x);         // Retornar a posição que se encontra o número x. Retornar -1 caso o número não exista.
int VetInsert(VetorInt *vi, int p, int x);  // Inserir um número x na posição p do vetor. Retorna o tamanho do vetor atual (len).
int VetDelete(VetorInt *vi, int p);         // Retornar o numero deletado. Retorna o tamanho do vetor atual (len).
void VetPrint(VetorInt *vi);                // Imprime vetor na tela.