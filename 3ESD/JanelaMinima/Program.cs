using System;
/*
 * Construa um algoritmo (em qualquer linguagem) que resolva o problema da Janela Mínima
 * de uma Substring:
 * Pegue duas strings s e t, e retorne a janela mínima de uma substring em s, onde cada 
 * caracter de t (pode incluir duplicatas) está inclusa na janela. 
 * Se não encontrar a substring, retorne uma string vazia "".

 * Exemplo:
 * s = "ADOBECODEBANC", t = "ABC" 
 * "BANC" 
 * A janela mínima é a substring "BANC", que inclui os caracteres 'A', 'B' e 'C' da string t.
 */


namespace JanelaMinima
{
    class Program
    {
        static void Main(string[] args)
        {
            string texto = "ADOBECODEMYNL";
            string referencia = "ABALA";
            string janelaMinima;
            int i = 0;
            int j = 0;
            int tamTrechoDoTexto;
            bool inicia = false;

            referencia = TrataReferencia(referencia);

            char[] arrayT = new char[referencia.Length];
            arrayT = referencia.ToCharArray();
            tamTrechoDoTexto = arrayT.Length;

            while (i < referencia.Length)
            {
                if (j <= (texto.Length - tamTrechoDoTexto))
                {
                    janelaMinima = texto.Substring(j, tamTrechoDoTexto);
                    if (janelaMinima.Contains(arrayT[i]))
                    {
                        inicia = false;
                        if (i == referencia.Length - 1)
                        {
                            System.Console.WriteLine($"Janela mínima: {janelaMinima}");
                            break;
                        }
                    }
                    else
                    {
                        if (tamTrechoDoTexto == texto.Length)
                        {
                            System.Console.WriteLine("Correspondência não encontrada.");
                            break;
                        }
                        else
                        {
                            if (j >= texto.Length - tamTrechoDoTexto)
                            {
                                j = 0;
                                tamTrechoDoTexto++;
                            }
                            else
                            {
                                j++;
                            }
                            inicia = true;
                            i = 0;
                        }
                    }
                }
                if (!inicia)
                {
                    i++;
                }
            }
        }

        static string TrataReferencia(string referencia)
        {
            string referenciaTratada;
            char[] arrayReferencia = new char[referencia.Length];
            arrayReferencia = referencia.ToCharArray();
            
            for (int i = 0; i < referencia.Length; i++)
            {
                for (int j = 1 + i; j < referencia.Length; j++)
                {
                    if(arrayReferencia[i] == arrayReferencia[j])
                    {
                        arrayReferencia[j] = ' ';
                    }
                }
            }
            referenciaTratada = new string(arrayReferencia);
            referenciaTratada = referenciaTratada.Replace(" ", "");
            return referenciaTratada;
        }
    }
}
