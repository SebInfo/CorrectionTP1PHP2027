# TP de révision PHP — BTS SIO SLAM

**Objectif :** reprendre progressivement les principaux mécanismes de
PHP étudiés en première année avant d’aborder les notions de deuxième
année. Les exercices sont volontairement courts. Ils permettent de revoir :

- variables et constantes ;
- conditions et boucles ;
- tableaux ;
- fonctions ;
- formulaires et superglobales ;
- sécurisation des données ;
- PDO et requêtes préparées ;
- lecture et écriture de fichiers ;
- `include` et `require`.

**Conseil :** réalisez les exercices sans recopier directement les
exemples du cours. Utilisez-les uniquement si vous êtes bloqué.

## ⚠️ Consigne importante

Pour ces premiers exercices de révision, **l'utilisation d'outils
d'intelligence artificielle n'est pas autorisée**. L'objectif est de
vérifier vos acquis de première année et de retrouver progressivement
les automatismes de programmation en PHP. Vous pouvez en revanche
utiliser :

- vos **cours et TP de l'année dernière** ;
- vos anciennes réalisations ;
- la documentation officielle de PHP ;
- des recherches sur Internet, forums et sites de documentation.

**En cas de difficulté, cherchez d'abord à comprendre et à résoudre le
problème par vous-même.** Nous utiliserons les outils d'IA
ultérieurement, dans des activités où leur utilisation sera
explicitement prévue.

## 📚 Exercices

- [Exercice 1 – Variables, constantes et calculs](#exercice-1--variables-constantes-et-calculs)
- [Exercice 2 – Conditions](#exercice-2--conditions)
- [Exercice 3 – Boucles](#exercice-3--boucles)
- [Exercice 4 – Tableaux et `foreach`](#exercice-4--tableaux-et-foreach)
- [Exercice 5 – Créer une fonction](#exercice-5--créer-une-fonction)
- [Exercice 6 – Formulaire PHP](#exercice-6--formulaire-php)
- [Exercice 7 – Sécuriser les données du formulaire](#exercice-7--sécuriser-les-données-du-formulaire)
- [Exercice 8 – MySQL, PDO et requêtes préparées](#exercice-8--mysql-pdo-et-requêtes-préparées)
- [Exercice 9 – Lecture et écriture d'un fichier](#exercice-9--lecture-et-écriture-dun-fichier)
- [Exercice 10 – `include` et `require`](#exercice-10--include-et-require)
- [Exercice 10 bis – Feuille de style CSS et classes](#exercice-10-bis--feuille-de-style-css-et-classes)
- [Exercice 11 – Mini-défi de synthèse](#exercice-11--mini-défi-de-synthèse--catalogue-de-produits)

## Exercice 1 – Variables, constantes et calculs

**Difficulté :** ★☆☆

On souhaite calculer le prix TTC d'un ordinateur.
Créez un programme PHP contenant :

- une variable `$produit` contenant `"Ordinateur portable"` ;
- une variable `$prixHT` contenant `750` ;
- une constante `TVA` contenant `0.20`.

Calculez ensuite le prix TTC et affichez :

    Ordinateur portable
    Prix HT : 750 €
    Prix TTC : 900 €

### À retenir

Une variable peut changer de valeur au cours du programme alors qu'une
constante est définie une seule fois.

## Exercice 2 – Conditions

**Difficulté :** ★☆☆

Une boutique applique les règles suivantes :

- prix inférieur à 50 € : aucune réduction ;
- prix compris entre 50 € et 100 € : réduction de 5 % ;
- prix supérieur à 100 € : réduction de 10 %.

Créez une variable :

``` php
<?php
$prix = 120;
?>
```

À l'aide de `if`, `elseif` et `else`, affichez le pourcentage de
réduction correspondant.

### Question supplémentaire

Modifiez votre programme pour calculer et afficher directement le prix
après réduction.

## Exercice 3 – Boucles

**Difficulté :** ★☆☆

### 3.1 – Boucle for

À l'aide d'une boucle `for`, affichez les nombres de 1 à 10. Résultat
attendu :

    1
    2
    3
    4
    5
    6
    7
    8
    9
    10

### 3.2 – Boucle while

On dispose d'un stock de 5 ordinateurs :

``` php
<?php
$stock = 5;
?>
```

Utilisez une boucle `while` pour simuler les ventes jusqu'à ce que le
stock atteigne zéro. Exemple :

    Ordinateur vendu. Stock restant : 4
    Ordinateur vendu. Stock restant : 3
    Ordinateur vendu. Stock restant : 2
    Ordinateur vendu. Stock restant : 1
    Ordinateur vendu. Stock restant : 0

## Exercice 4 – Tableaux et foreach

**Difficulté :** ★★☆

On dispose du tableau associatif suivant :

``` php
<?php

$produits = [
    "Clavier" => 49.90,
    "Souris" => 29.90,
    "Écran" => 189.90,
    "Webcam" => 79.90
];

?>
```

À l'aide d'une boucle `foreach` :

1.  affichez tous les produits et leur prix ;
2.  affichez uniquement les produits coûtant plus de 50 € ;
3.  comptez le nombre de produits présents dans le tableau.

Exemple d'affichage :

    Clavier : 49.90 €
    Souris : 29.90 €
    Écran : 189.90 €
    Webcam : 79.90 €

### Question

Pourquoi dit-on que ce tableau est un **tableau associatif** et non un
tableau indicé ?

## Exercice 5 – Créer une fonction

**Difficulté :** ★★☆

Créez une fonction :

``` php
calculerTTC(float $prixHT): float
```

Cette fonction doit :

- recevoir un prix HT ;
- calculer le prix TTC avec une TVA de 20 % ;
- retourner le prix TTC.

Testez ensuite la fonction :

``` php
<?php

echo calculerTTC(100);

?>
```

Le résultat doit être :

    120

### Deuxième étape

Créez une nouvelle fonction :

``` php
calculerRemise(float $prix, float $remise): float
```

Exemple :

``` php
echo calculerRemise(200, 0.10);
```

doit retourner :

    180

### Question

Pourquoi est-il préférable de passer le taux de remise en paramètre
plutôt que d'utiliser une variable globale ?

## Exercice 6 – Formulaire PHP

**Difficulté :** ★★☆

Créez un formulaire permettant de saisir :

- le nom d'un produit ;
- son prix ;
- une quantité.

Le formulaire devra utiliser :

``` html
<form method="post">
```

Après validation, le programme PHP doit récupérer les données avec
`$_POST`. Si l'utilisateur saisit :

    Produit : Clavier
    Prix : 50
    Quantité : 3

le programme doit afficher :

    Commande : 3 x Clavier
    Prix total : 150 €

### Attention

Avant d'utiliser les données, vérifiez qu'elles existent avec `isset()`
ou `!empty()`.

## Exercice 7 – Sécuriser les données du formulaire

**Difficulté :** ★★☆

On dispose du code suivant :

``` php
<?php

$nom = $_POST['nom'];

echo "Bonjour " . $nom;

?>
```

Ce programme affiche directement une donnée envoyée par l'utilisateur.

### Travail demandé

1.  Supprimez les espaces inutiles avec `trim()`.
2.  Utilisez `htmlspecialchars()` pour empêcher l'interprétation de
    balises HTML.
3.  Utilisez `ENT_QUOTES` et l'encodage UTF-8.

Testez ensuite votre programme avec cette saisie :

    <script>alert("Bonjour")</script>

### Question

Quelle vulnérabilité cherche-t-on à éviter ici ?

## Exercice 8 – MySQL, PDO et requêtes préparées

**Difficulté :** ★★★

Dans cet exercice, nous allons créer une petite
base de données contenant des produits, nous y connecter avec PHP puis
effectuer une recherche à l'aide d'une **requête préparée PDO**.

### 8.1 – Création de la base de données

Démarrez **WampServer** puis ouvrez **phpMyAdmin**. Créez une base de
données appelée :

    boutique

Dans cette base, exécutez ensuite le script SQL suivant :

``` sql
CREATE TABLE produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL
);
```

Ajoutez maintenant quelques produits :

``` sql
INSERT INTO produit (nom, prix, stock) VALUES
('Clavier', 49.90, 12),
('Souris', 29.90, 20),
('Écran', 189.90, 5),
('Webcam', 79.90, 8),
('Casque', 59.90, 15),
('Ordinateur portable', 749.90, 3);
```

**Vérification :** dans phpMyAdmin, consultez la table `produit` et
vérifiez que les six produits sont présents.

### 8.2 – Connexion à MySQL avec PDO

Créez un fichier `connexion.php`. **Rappel :** PDO permet à PHP de
communiquer avec une base de données. Complétez la connexion suivante :

``` php
<?php

$host = "localhost";
$dbname = "boutique";
$user = "root";
$password = "";

try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {

    die("Erreur de connexion à la base de données");

}
```

Sur une installation WampServer classique, l'utilisateur MySQL est
souvent `root` avec un mot de passe vide.

### 8.3 – Lire les produits

Créez maintenant un fichier `produits.php`. Commencez par charger le
fichier de connexion :

``` php
require "connexion.php";
```

Écrivez ensuite une requête SQL permettant de récupérer **tous les
produits** :

``` sql
SELECT ...
```

Exécutez la requête avec PDO :

``` php
$stmt = $pdo->query($sql);

$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

**Rappel :**

- `query()` exécute ici une requête SQL ;
- `fetchAll()` récupère toutes les lignes retournées ;
- `PDO::FETCH_ASSOC` permet d'obtenir un tableau associatif.

Utilisez ensuite une boucle `foreach` pour afficher les produits.
Affichage attendu :

    Clavier - 49.90 €
    Souris - 29.90 €
    Écran - 189.90 €
    Webcam - 79.90 €
    Casque - 59.90 €
    Ordinateur portable - 749.90 €

### 8.4 – Ajouter une recherche par prix

Nous souhaitons maintenant permettre à l'utilisateur de choisir le prix
maximum. Ajoutez le formulaire suivant dans `produits.php` :

``` html
<form method="post">

    <label>Prix maximum :</label>

    <input
        type="number"
        name="prixMax"
        step="0.01"
        min="0"
        required
    >

    <button type="submit">Rechercher</button>

</form>
```

Après validation du formulaire, le prix saisi sera disponible dans :

``` php
$_POST["prixMax"]
```

Vérifiez d'abord que la donnée existe :

``` php
if (isset($_POST["prixMax"])) {

    $prixMax = (float) $_POST["prixMax"];

}
```

### 8.5 – Effectuer la recherche avec une requête préparée

Nous voulons récupérer uniquement les produits dont le prix est
inférieur ou égal au prix saisi par l'utilisateur. La requête SQL devra utiliser
un paramètre nommé :

    :prixMax

Complétez la requête :

``` php
$sql = "SELECT *
        FROM produit
        WHERE prix <= :prixMax";
```

Préparez ensuite la requête :

``` php
$stmt = $pdo->prepare($sql);
```

Exécutez-la en transmettant la valeur de `$prixMax` :

``` php
$stmt->execute([
    "prixMax" => $prixMax
]);
```

Récupérez enfin les résultats :

``` php
$produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
```

Utilisez une boucle `foreach` pour afficher les produits trouvés.

### Exemple

Si l'utilisateur saisit :

    100

le programme doit afficher :

    Clavier - 49.90 €
    Souris - 29.90 €
    Webcam - 79.90 €
    Casque - 59.90 €

### Rappel – Requête préparée

Une valeur provenant de l'utilisateur ne doit pas être concaténée
directement dans une requête SQL. On évite donc d'écrire :

``` php
$sql = "SELECT * FROM produit WHERE prix <= " . $prixMax;
```

On préfère utiliser :

``` php
$sql = "SELECT *
        FROM produit
        WHERE prix <= :prixMax";
```

La requête SQL et la valeur fournie par l'utilisateur sont ainsi
traitées séparément.

### Questions

1.  À quoi sert `PDO` dans ce programme ?
2.  Quelle est la différence entre `query()` et `prepare()` dans cet
    exercice ?
3.  À quoi correspond `:prixMax` dans la requête SQL ?
4.  Pourquoi est-il déconseillé de concaténer directement une valeur
    provenant de `$_POST` dans une requête SQL ?
5.  Quelle vulnérabilité les requêtes préparées permettent-elles
    notamment d'éviter ?

### Pour aller plus loin

Modifiez le formulaire pour permettre également à l'utilisateur de
saisir un **stock minimum**. La recherche devra alors afficher
uniquement les produits respectant les deux conditions :

- prix inférieur ou égal au prix maximum ;
- stock supérieur ou égal au stock minimum.

Vous devrez utiliser deux paramètres dans votre requête préparée :

    :prixMax
    :stockMin

## Exercice 9 – Lecture et écriture d'un fichier

**Difficulté :** ★★☆

On souhaite conserver une trace des connexions des utilisateurs dans un fichier `connexions.txt`.

### 9.1 – Écriture

À chaque exécution du programme, ajoutez une nouvelle ligne à la fin du fichier sous la forme :

```text
sebastien;15/09/2026 17:25
```

La date et l'heure ne doivent pas être écrites en dur : elles doivent correspondre au moment où le programme est exécuté.

Vous devrez utiliser :

- `date()` ;
- `fopen()` ;
- le mode `"a"` ;
- `fwrite()` ;
- `fclose()`.

Exemple de principe :

```php
date_default_timezone_set("Europe/Paris");

$fichier = fopen("connexions.txt", "a");
$date = date("d/m/Y H:i");
$ligne = "sebastien;" . $date . "\n";

fwrite($fichier, $ligne);
fclose($fichier);
```

Le mode `"a"` permet d'ajouter les nouvelles données à la fin du fichier sans effacer son contenu.

### 9.2 – Lecture

Écrivez ensuite un programme permettant de lire le fichier `connexions.txt` ligne par ligne et d'afficher son contenu dans une page HTML.

Vous devrez utiliser :

- `fopen()` avec le mode `"r"` ;
- `fgets()` ;
- `feof()` ;
- `fclose()`.

### Question

Quelle différence y a-t-il entre les modes `"r"` et `"a"` de `fopen()` ?

## Exercice 10 – `include` et `require`

**Difficulté :** ★★☆

On souhaite organiser une petite application de cette manière :

```text
monsite/
│
├── index.php
├── header.php
├── footer.php
└── config.php
```

Le fichier `header.php` contient :

```html
<header>
    <h1>Boutique informatique</h1>
</header>
```

Le fichier `footer.php` contient :

```html
<footer>
    BTS SIO SLAM
</footer>
```

Le fichier `config.php` contient par exemple :

```php
<?php

$nomSite = "Boutique informatique";
$version = "1.0";
```

### Travail demandé

Dans `index.php` :

1. chargez obligatoirement `config.php` avec `require` ;
2. incluez `header.php` avec `include` ;
3. affichez le nom du site et sa version ;
4. incluez `footer.php` ;
5. utilisez `__DIR__` pour construire les chemins.

### Questions

1. Quelle différence existe entre `include` et `require` ?
2. Pourquoi utiliser `require` pour un fichier de configuration indispensable ?
3. À quoi sert `__DIR__` ?

## Exercice 10 bis – Feuille de style CSS et classes

**Difficulté :** ★★☆

On souhaite maintenant améliorer la présentation de l'application précédente avec une feuille de style CSS externe.

L'arborescence devient :

```text
monsite/
│
├── index.php
├── header.php
├── footer.php
├── config.php
└── style.css
```

Ajoutez la feuille de style dans la page :

```html
<link rel="stylesheet" href="style.css">
```

Utilisez au minimum les classes suivantes :

```css
.entete { }
.titre-site { }
.contenu { }
.information { }
.pied-page { }
```

### Travail demandé

1. ajoutez des classes CSS dans `header.php`, `index.php` et `footer.php` ;
2. créez le fichier `style.css` ;
3. mettez en forme l'en-tête, le contenu principal et le pied de page ;
4. utilisez au moins une même classe sur plusieurs éléments si cela est pertinent.

Exemple :

```html
<p class="information">Version : 1.0</p>
```

```css
.information {
    background-color: #eeeeee;
    padding: 10px;
}
```

## Exercice 11 – Mini-défi de synthèse : catalogue de produits

**Difficulté :** ★★★

Vous devez réaliser une petite page permettant de rechercher les produits d'une boutique informatique en fonction d'un **prix maximum**.

### Base de données

La table `produit` possède les colonnes suivantes :

```text
id
nom
prix
stock
```

### Étape 1 – Formulaire

Créez un formulaire permettant de saisir un prix maximum et envoyez les données avec la méthode `POST`.

Exemple :

```text
Prix maximum : [ 100 ]

[ Rechercher ]
```

### Étape 2 – Traitement PHP

Lorsque le formulaire est envoyé :

1. récupérez le prix avec `$_POST` ;
2. vérifiez que la valeur existe avec `isset()` ;
3. convertissez-la en `float` ;
4. préparez une requête PDO ;
5. sélectionnez les produits dont le prix est inférieur ou égal à la valeur saisie ;
6. exécutez la requête avec un paramètre nommé ;
7. récupérez les résultats avec `PDO::FETCH_ASSOC`.

La requête devra utiliser le paramètre :

```text
:prix_max
```

### Étape 3 – Affichage

Affichez les résultats dans un véritable tableau HTML contenant trois colonnes :

```text
Nom          Prix       Stock
--------------------------------
Clavier      49.90 €      12
Souris       29.90 €      24
Webcam       79.90 €       6
```

Si aucun produit n'est trouvé, affichez :

```text
Aucun produit correspondant.
```

### Étape 4 – Organisation

La connexion à la base de données est déjà définie dans :

```text
connexion.php
```

Chargez ce fichier dans votre page avec :

```php
require __DIR__ . "/connexion.php";
```

L'arborescence pourra être :

```text
catalogue/
│
├── index.php
├── connexion.php
└── style.css
```

### Étape 5 – Mise en forme CSS

Ajoutez une feuille de style `style.css` et utilisez au minimum les classes suivantes :

```css
.formulaire { }
.resultats { }
.message { }
```

Le tableau HTML devra également être mis en forme avec CSS.

### Compétences mobilisées

- formulaire HTML ;
- `$_POST` ;
- conditions ;
- conversion de type ;
- PDO ;
- requêtes préparées ;
- tableaux associatifs ;
- `foreach` ;
- HTML généré avec PHP ;
- `require` et `__DIR__` ;
- feuille de style CSS externe.

## Questions rapides de fin de séance

Sans utiliser le cours, répondez aux questions suivantes :

1.  Quelle différence existe entre `==` et `===` ?
2.  À quoi sert `isset()` ?
3.  À quoi sert `empty()` ?
4.  Quelle superglobale contient les données envoyées avec un formulaire
    utilisant `method="post"` ?
5.  Quelle boucle est particulièrement adaptée au parcours d'un tableau
    ?
6.  Quel mot-clé permet à une fonction de renvoyer une valeur ?
7.  À quoi sert `htmlspecialchars()` ?
8.  Pourquoi utiliser une requête préparée avec PDO ?
9.  Quelle différence existe entre `include` et `require` ?
10. À quoi correspond `__DIR__` ?

## Objectif atteint ?

À la fin de ces exercices, vous devez être capable de réaliser sans aide
un petit programme PHP procédural comprenant :

- des variables et des conditions ;
- des boucles et des tableaux ;
- des fonctions ;
- un formulaire HTML ;
- la récupération et la vérification des données utilisateur ;
- une requête préparée avec PDO ;
- un affichage dynamique des résultats.

**Ces notions constituent les bases nécessaires pour aborder la suite du
programme de deuxième année.**

