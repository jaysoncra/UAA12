using System;

namespace console_C
{

    class Program
    {
        static void Main(string[] args)
        {
            // Déclaration des variables
            double a;
            double b;
            double c;
            string reponse;
            Console.WriteLine("Bienvenue sur le calculateur de trinome");
            
            //Récupération des données (lectures)
            Console.Write("encodez la valeur du coefficient de x²");
            a = double.Parse(Console.ReadLine());
            Console.Write("encodez la valeur du coefficient de x");
            b = double.Parse(Console.ReadLine());
            Console.Write("encodez la valeur du terme indépendant");
            c = double.Parse(Console.ReadLine());

            if (a!=0)
            {
                // appel du morceau de programme de traitement
                console_C(a, b, c, out reponse);
                Console.WriteLine(reponse);
            }
            else
            {
                //cas d'erreur : pas de traitement
                Console.WriteLine("vous n'avez pas encodé un terme de second degré !");
            }
        }

        static void console_C (double a, double b, double c,out string reponse)
        {
            double delta;
            double x1;
            double x2;
            delta = b * -4 * a * c;
            if (delta > 0)
            {
                x1 = (-b + Math.Sqrt(delta)) / (2 * a);
                x2 = (-b - Math.Sqrt(delta)) / (2 * a);
                reponse = "il y a deux solution réelles : " + x1 + "," + x2;
            }
            else
            {
                if (delta = 0)
                {
                    x1 = -b / (2 * a);
                    reponse = "Il y a une solution :" + x1;
                else
                {

                }
            }
        }
    }
}
