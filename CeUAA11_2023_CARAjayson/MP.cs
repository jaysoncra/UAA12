using System;
using System.Collections.Generic;
using System.Text;

namespace CeUAA11_2023_CARAjayson
{
    public struct MethodesDuProjet
    {
        /**
      * RetireEspaces : crée une chaine de caractères sans espace
      * IN chaine : chaine de caractères dans laquelle on retire les espaces
      * OUT copie conforme de la chaine de départ sans les espaces
      * HYPO : chaine non vide
      */
        public string RetireEspaces(string chaine)
        {
            string newChaine = "";
            string carExt;
            int lg = chaine.Length;
            for (int i = 0; i < lg; i++)
            {
                carExt = chaine.Substring(i, 1);
                if (carExt != " ")
                {
                    newChaine += carExt;
                }
            }
            return newChaine;
        }
        
        

    }
    public struct CryptVigenere
    {
        
        public void CryptVigenere(string phClaire, string phClef, out string matVigenere)
        {
            string [,] matVigenere = new string[4, phClaire.Length]; ///Je n'arrive pas à régler le problème avec la porté de la variable
            int j = 0;
            int codeAscii;
            int i;
            for (i = 0; i < phClaire.Length-1; i++)
            {
                matVigenere[0, i] = Char.ToString(phClaire[i]);
                if (j == (int)phClef.Length)
                {
                    j = 0;
                }
                matVigenere[1, i] = Char.ToString(phClef[j]);
                matVigenere[2, i] = ((int)phClef[j] - 65).ToString();
                const int V = 90;
                if ((int)phClaire[i]) + (int.Parse(matVigenere[2, i])) >= V /// il y avait un problème avec le format du 90 qui était en 32bit et l'ordi à proposer l'alternative de mettre une variable
                {
                    codeAscii = (int)char.Parse(matVigenere[0, i]) + int.Parse(matVigenere[2, i]);
                }
                else
                {
                    codeAscii = (int)char.Parse(matVigenere[0, i]) + int.Parse(matVigenere[2, i]) - 26;
                }
                matVigenere[3, i] = Convert.ToChar(codeAscii).ToString();
                j += 1;
            }
        }
        /// <summary>
        /// Demander une des entrées à l’utilisateur avec les vérifications nécessaires.
        /// </summary>
        /// <param name="question">Question à poser à l’utilisateur</param>
        /// <param name="resultat">Entrée de l’utilisateur</param>
        public void DemanderPhraseAvecVerification(string question, out string resultat)
        {
            bool uneFois = false; // Variable qui permet de savoir si l’utilisateur à déjà fait une erreur
            do
            {
                if (uneFois) Console.WriteLine("/!\\ Pouvez-vous recommencer, votre entrée n'était pas bonne (doit contenir uniquement MAJ, min et espace).");
                Console.WriteLine(question);
                resultat = Console.ReadLine();
                uneFois = true;
            } while (!EntreeEstBonne(resultat));
        }
        /// <summary>
        /// Savoir si l’entrée de l’utilisateur est bonne.
        /// </summary>
        /// <param name="entree">Entrée de l’utilisateur</param>
        /// <returns>Si l’entrée est bonne ou non</returns>
        public bool EntreeEstBonne(string entree)
        {
            for (int i = 0; i <= entree.Length - 1; i++) // i = Variable qui s’incrémente dans une boucle for (place dans le string)
            {
                int ic = entree[i]; // Valeur du caractère à la place "i" dans le string
                if (!(ic >= 65 && ic <= 90) && !(ic >= 97 && ic <= 122) && ic != 32) return false;
            }
            return true;
        }
    }
    public struct CryptAffine
    {
       

        public void CryptAffine(string phClaire, int a, int b, out string matAffine)
        {
            int i;
            int x;
            int y;

            string [,] matAffine = new string[4, phClaire.Length];
            for (i = 0; i < phClaire.Length-1; i++)
            {
                matAffine[0, i] = char.ToString(phClaire[i]);
                x = ((int)phClaire[i] - 65);
                matAffine[1, i] = x;
                y = (a * x + b) % 26;
                matAffine[2, i] = y;
                matAffine[3, i] = y + 65;
            }
        }
        /// <summary>
        /// Demander une des entrées à l’utilisateur avec les vérifications nécessaires.
        /// </summary>
        /// <param name="question">Question à poser à l’utilisateur</param>
        /// <param name="resultat">Entrée de l’utilisateur</param>
        public void DemanderPhraseAvecVerification(string question, out string resultat)
        {
            bool uneFois = false; // Variable qui permet de savoir si l’utilisateur à déjà fait une erreur
            do
            {
                if (uneFois) Console.WriteLine("/!\\ Pouvez-vous recommencer, votre entrée n'était pas bonne (doit contenir uniquement MAJ, min et espace).");
                Console.WriteLine(question);
                resultat = Console.ReadLine();
                uneFois = true;
            } while (!EntreeEstBonne(resultat));
        }
        /// <summary>
        /// Savoir si l’entrée de l’utilisateur est bonne.
        /// </summary>
        /// <param name="entree">Entrée de l’utilisateur</param>
        /// <returns>Si l’entrée est bonne ou non</returns>
        public bool EntreeEstBonne(string entree)
        {
            for (int i = 0; i <= entree.Length - 1; i++) // i = Variable qui s’incrémente dans une boucle for (place dans le string)
            {
                int ic = entree[i]; // Valeur du caractère à la place "i" dans le string
                if (!(ic >= 65 && ic <= 90) && !(ic >= 97 && ic <= 122) && ic != 32) return false;
            }
            return true;
        }
    }
}
