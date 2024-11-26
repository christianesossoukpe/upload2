
---

## Tâche : Intégration d'un Système de Téléchargement et d'Affichage de Fichiers PDF dans une Application Laravel avec Vue.js

### Objectif
L'objectif de cette tâche est de permettre aux utilisateurs d'uploader des fichiers PDF contenant des articles, qui seront ensuite affichés sur le site. Les utilisateurs pourront lire le contenu du PDF directement dans l'application et le télécharger.

### Instructions

1. **Créer une migration pour la table des articles**
   - Créez une migration pour une table `articles` qui contiendra les colonnes nécessaires pour stocker les informations sur les articles (par exemple, `id`, `title`, `file_path`, `created_at`, etc.).
   - Exécutez la migration pour créer la table dans la base de données.

2. **Créer un modèle Eloquent**
   - Créez un modèle Eloquent nommé `Article` qui interagira avec la table `articles`.

3. **Créer un contrôleur**
   - Créez un nouveau contrôleur nommé `ArticleController`.
   - Ajoutez une méthode pour gérer l'upload des fichiers PDF :
     - Cette méthode doit accepter un fichier PDF, le stocker sur le serveur (par exemple, dans le dossier `storage/app/public/articles`), et enregistrer les informations pertinentes (titre, chemin du fichier) dans la base de données.
   - Ajoutez une autre méthode pour récupérer et afficher la liste des articles disponibles.

4. **Configurer les routes**
   - Ajoutez des routes dans `routes/web.php` pour :
     - Uploader un nouvel article (POST).
     - Afficher la liste des articles (GET).

5. **Créer une vue Blade pour l'upload**
   - Créez une vue Blade qui permet aux utilisateurs de télécharger un fichier PDF. Cette vue doit inclure un formulaire avec un champ pour le fichier et un bouton de soumission.

6. **Créer un composant Vue.js pour afficher les articles**
   - Créez un composant Vue.js qui récupère la liste des articles depuis le serveur et les affiche sous forme de liens ou de boutons.
   - Lorsque l'utilisateur clique sur un article, utilisez un iframe ou un composant spécifique pour afficher le PDF dans l'application.

7. **Gérer le téléchargement du PDF**
   - Assurez-vous qu'il y a une option pour que les utilisateurs puissent télécharger le PDF en cliquant sur un bouton ou un lien associé à chaque article.

8. **Tester l'intégration**
   - Vérifiez que l'upload fonctionne correctement et que les fichiers sont bien enregistrés en base de données.
   - Testez l'affichage des articles et assurez-vous que les utilisateurs peuvent lire et télécharger les fichiers PDF.

### Critères d'évaluation
- Fonctionnalité : Les utilisateurs doivent pouvoir uploader, lire et télécharger des articles au format PDF.
- Code : Le code doit être bien structuré, commenté et respecter les bonnes pratiques de développement.
- Documentation : Fournissez des commentaires dans votre code expliquant chaque étape importante.

### Date limite
- Veuillez soumettre votre travail d'ici la fin de la journée.

---


