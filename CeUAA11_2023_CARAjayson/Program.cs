using System;

namespace CeUAA11_2023_CARAjayson
{
    class Program
    {
        static void Main(string[] args)
        {
            string phCle;
            string phClaire;
            string recom;
            bool firstTime = true;
            MethodesDuProjet MesOutils = new MethodesDuProjet();
            do
            {
                Console.Clear();
                // récupération des données
                Console.WriteLine("Bienvenue dans ce programme de cryptage ");
                Console.WriteLine("======================================= ");

                Console.WriteLine("Choisissez parmi  les options suivantes : \n 1 - Cryptage de Vigenère \n 2 - Cryptage avec la méthode affine");
              


                // Demande reprise
                Console.WriteLine("Un autre cryptage ? (oui = espace non = autre)");
                recom = Console.ReadLine();
            } while (recom == " ");
            Console.ReadLine();
        }
    }
}
