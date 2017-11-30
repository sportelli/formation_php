# TP sur les packages / architecture de projets Symfony

1. `composer install` pour installer les dépenses (junit)
2. `composer dump-autoload` pour générer l'autoload des classes
3. `./vendor/phpunit`pour lancer les tests
4. `./vendor/phpdocumentor/phpdocumentor/bin/phpdoc -d ./src -t ./doc/` pour lancer la génération de la doc

Namespace utilisé: FormationPHP
Couches: 

 * view
     * utils
 * service
 * dao
 * entity
