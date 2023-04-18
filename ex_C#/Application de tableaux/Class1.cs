using System;
using System.Collections.Generic;
using System.Text;

namespace Application_de_tableaux
{
    public struct Class1
    {
        public void Ergomixx(out string[] tMixed)
        {
            int[] tJour = new int[] { 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 };
            string[] tMois = new string[] { "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre" };
            int i;
            int j;
            tMixed = new string[24];

            i = 0;
            for (int j = 0; j < 23; j += 2)
            {
                tMixed[j] = tMois[i];
                tMixed[j + 1] = tJour[i].ToString();
                i = i++;

            }
        }
         public void paire_impaire(out int[] tabTemoin, out int[] tabPair, out int tabImpair) )
        {
            tabPair = new int[tabTemoin.lenght]

        }
  
