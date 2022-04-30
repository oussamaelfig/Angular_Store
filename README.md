## Développeurs:

OUSSAMA EL-FIGHA | ELFO74030209

NICOLAS PLANTE | PLAN83020108

---

# Déploiement et démarrer

- Télécharger l'application puis la décompresser ou la clonner avec git:

```csh
git clone https://gitlab.info.uqam.ca/el-figha.oussama/tp2_inf3190.git
```

- Par la suite, en utilisant un terminal, aller dans le dossier tpapp-master de l'application et tapez le commandes suivantes:

> - Pour installer les modules node.js requis

> ```csh
> npm install express body-parser --save
> ```

> ```csh
> npm install
> ```

> - Pour démarrer l'API

> ```csh
> node tpapp.js
> ```

- Dans un autre terminal, aller dans le dossier vpi-app et tapez les commandes suivantes:

> - Pour installer les modules node.js requis

> ```csh
> npm install
> ```

> - Pour démarrer l'application et l'ouvrir sur le navigateur web en mode développement

> ```csh
> ng serve --open
> ```

> - Pour build l'application 

> ```csh
> ng build
> ```

> - Pour lancer l'application une fois build
> - Installation de http-server qui est nécessaire

> ```csh
> npm install http-server -g
> ```

> - Lancer l'app
> ```csh
> http-server dist/vpi-app
> ```
- Vous pouvez y accéder sur un navigateur avec l'adresse que la console vous indique par la suite

# Liste des pages

### Liste de comptes pour les tests:

| type de compte | identifiant      | mot de passe |
| -------------- | ---------------- | ------------ |
| - user         | - allosalu       | - 1234asdf   |
| - user         | - userDeux       | - p1s2d3f4   |
| - user         | - infowebs       | - INF31902   |
| - user         | - jaimectf       | - 2171best   |
| - user         | -cpluscpl        | - cPlus232   |
| - user         | - hellowor       | - tech2022   |
| - user         | - bonjourM       | - yeetMe44   |
| - user         | - confiden       | - pass1234   |
| - user         | - aqswdefr       | - aqswde12   |
| - admin        | - administ       | - TpAdmi12   |

Après s'être connecté, une page avec un message de succès selon le type d'utilisateur va s'afficher.
