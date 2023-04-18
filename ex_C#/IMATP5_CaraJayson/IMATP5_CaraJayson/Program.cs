using System;

namespace IMATP5_CaraJayson
{
    class Program
    {
        static void Main()
        {
            Console.WriteLine("paschal_triangle");
            Console.WriteLine("Quel dimension pour la matrice ? (c'est un carré)");
            Console.Write("Seulement des entier positif (au dessus de 0 et pas à virgule");/// pas eu le temps pour le tryParse
            int N;///ce qui est encodé par l'user et qui choisi donc la taille de la matrice
            N = Convert.ToInt32(Console.ReadLine());/// converti se qui est encodé par l'utilisateur en int
            int[,] Matrice = new int[N, N];
            Matrice[0, 0] = 1; /// c'est toujour 1 à cet place

            for (int i = 1; i < N; i++)
            {
                Matrice[i, 0] = Matrice[i, i] = 1;
                for (int j = 1; j <= i - 1; j++)
                {
                    Matrice[i, j] = Matrice[i - 1, j - 1] + Matrice[i - 1, j];
                }
            }


        }
    }
}
