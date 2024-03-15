# Voir Partie3 : chapitre 3 - activez le partage de fichier 
### Exercice : Création d'un formulaire d'envoi de CV

**Objectif :** Mettre en pratique la création d'un formulaire permettant aux utilisateurs de télécharger leur CV sur votre site web, en assurant la validation et le traitement appropriés côté serveur.

**Instructions :**

1. Créez un formulaire HTML avec les champs suivants :
   - Nom et Prénom
   - Adresse email
   - Téléphone
   - Champ d'envoi de fichier pour le CV

2. Ajoutez la validation côté client pour les champs obligatoires (Nom, Prénom, Adresse email) en utilisant du JavaScript.

3. Développez un script PHP pour traiter l'envoi du formulaire et le fichier CV.
   - Assurez-vous de vérifier que tous les champs obligatoires sont remplis côté serveur.
   - Validez le format de l'adresse email.
   - Limitez la taille du fichier CV à 2 Mo.
   - Autorisez uniquement les fichiers PDF, DOC et DOCX comme formats de CV.

4. Stockez le fichier CV dans un dossier spécifique sur le serveur, en veillant à ce que le nom du fichier soit unique pour éviter les écrasements.

5. Affichez un message de confirmation à l'utilisateur une fois que le formulaire a été soumis avec succès.

6. Testez votre formulaire en soumettant différentes combinaisons de données, y compris des fichiers CV de tailles variées et des formats différents.

7. Assurez-vous que le formulaire et le script PHP sont sécurisés contre les attaques CSRF et XSS.

8. Bonus : Implémentez une fonctionnalité pour envoyer un email de confirmation à l'utilisateur après avoir reçu son CV.

9. Bonus avancé : Créez une interface d'administration pour visualiser et télécharger les CV soumis.

**Conseils :**
- Utilisez des bibliothèques PHP comme PHPMailer pour envoyer des emails.
- Utilisez des expressions régulières pour valider le format de l'adresse email.
- Utilisez `move_uploaded_file()` pour déplacer et stocker les fichiers CV sur le serveur.

En suivant ces étapes, vous améliorerez vos compétences dans le traitement des fichiers envoyés via les formulaires en PHP, ainsi que dans la validation des données utilisateur et la sécurisation des applications web.