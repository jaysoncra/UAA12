using System;

namespace CHOIXPEAU
{
    class Program
    {
        static void Main(string[] args)
        {
            // Déclaration des variables
            double E1;
            double O1;
            double E2;
            double O2;
            string resultat;
            Console.WriteLine("Bienvenue, laisser le Choixpeau choisir du destin des éleves");

            // Récuperation des données (lectures)
            Console.Write("veuillez encodez la note de l'écrit du premier module de l'élève (cotation sur vinght)");
            E1 = double.Parse(Console.ReadLine());
            Console.Write("veuillez encodez la note de l'oral du premier module de l'élève (cotation sur vinght)");
            O1 = double.Parse(Console.ReadLine());
            Console.Write("veuillez encodez la note de l'écrit du second module de l'élève (cotation sur vinght)");
            E2 = double.Parse(Console.ReadLine());
            Console.Write("veuillez encodez la note de l'oral du second module de l'élève (cotation sur vinght)");
            O2 = double.Parse(Console.ReadLine());

            if (E1>=0 && E1<=20 && O1>=0 && O1<=20 && E2>=0 &&E2<=20 && O2>=0 && O2<=20)
            {
                // appel du morceau de programme de traitement
                CHOIXPEAU(E1, O1, E2, O2, out resultat);
            }
            else
            {
                //cas d'erreur : pas de traitement
                Console.WriteLine("vous n'avez pas encodé de terme(s) pouvant être mis dans une cotation sur 20");
            }
            
        }

        static void CHOIXPEAU (double E1, double O1, double E2, double O2, out string resultat)
        {
            double MM1;
            double MM2;
            double MG;
            resultat = "";
            if (E2 > O2)
            {
                MM2 = (E2 * 2 + O2) / 3;
            }
            else
            {
                MM2 = (E2 + O2 * 2) / 3;
            }
            if (E1 > O1)
            {
                MM1 = (E1 * 2 + O1) / 3;
            }
            else
	{       {
                MM1 = (E1 + O1 * 2) / 3;
	}       }
            MG = (MM1 * 2 + MM2) / 3;
            if (MM1 < 8 || MM2 < 8)
	{       {
                resultat = "l'élève a échoué(e) car une de ses notes est inférieur à 8";
	}       }
            else
	{       {
                if (MG > 10)
                {
                    resultat = "l'élève a échoué(e) à échouer car sa moyenne générale est supérieur ou égale à 10";
                }
	{

	}
            }

	}
	{

	}
	{

	}
        }
    }
}
        