/*--------------------*/
/* MAJ de la liste des comitards */
/*--------------------*/

on utilise la table historique dans la bdd.
elle est générée en important le fichier historique.csv dans le dossier assets/files/
Il faut donc mettre à jour ce fichier => on prend le fichier historique.xls ( excel ) et on le complète avec la liste fournie par la fede
Attention: bien respecter la "mise en forme" ( repeter la promo, unmerge le cercle et le repeter a chaque ligne)
Export au format csv ( ATTENTION, save with encoding utf-8 sinon l'import dans la bdd va echouer !)
On a notre fichier => import dans phpMyAdmin, attention, cocher "la 1ere ligne sont les noms des colonnes"
Si succès : supprimer la table historique et renommer la nouvelle table importée en 'historique' ( via operations dans phpmyadmin)


Le système est clairement améliorable, faites vous plaiz

