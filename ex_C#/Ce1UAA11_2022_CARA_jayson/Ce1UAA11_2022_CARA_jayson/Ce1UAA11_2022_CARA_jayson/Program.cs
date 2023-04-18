using System;

namespace Ce1UAA11_2022_CARA_jayson
{
    class Program
    {
        static void LireReel(string question, out double n)
        {
            string nUser;
            Console.Write(question);
            nUser = Console.ReadLine();


            while (!double.TryParse(nUser, out n))
            {
                if (nUser < 3 && nUser > 9) // je ne sais pas ce que je peux faire pour régler les problème, j'ai essayé de mettre "double nUser mais ça ne change pas grand chose.
                {
                    Console.WriteLine("Combien de lancers de dés desirez-vous ? (compris entre 3 et 9");
                    nUser = Console.ReadLine();
                }

            }
        }

            static void ComptePointsDe (double de, out double points)
            {
                if (de == 1)
                {
                    points = 100;
                }
                else
                {
                    if ((de >= 2) && (de <= 5))
                    {
                        points = de;
                    }
                    else
                    {
                        points = 60;
                    }
                }
            }
        static void TourDeJeu(out string desSortis , out double pointsTour , out bool arret)
        {
            double compte2;
            double de;
            Random alea = new Random();
            double points;

            desSortis = "";
            pointsTour = 0;
            arret = false;
            compte2 = 0;

            for (int i = 0; i < 3; i++)
            {
                de = alea.Next(1, 7);
                if (de = 2) // Je suis coincer ici car je ne sais pas qu'est ce qu'il faut mettre à la place de "double" pour "de"
                {
                    compte2 = compte2 + 1;
                }
                desSortis = desSortis + de + " ";
                ComptePointsDe(de, out points);
                pointsTour = pointsTour + points;
            }
            if (compte2 == 3)
            {
                arret = true;
            }

        }

            
            
        

    }
}
