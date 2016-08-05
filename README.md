# Governor Kaine's Emails

An application for viewing and searching Virginia Governor Kaine's emails

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Clone GitHub repository.
3. From install folder, run `php composer.phar install`.
4. From install folder, run `php composer.phar require friendsofcake/search`.
5. Place database file in install folder (contact Nathan for file)

## Configuration

Edit /config/app.php to connect to the database

e.g.
```
'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Sqlite',
            'persistent' => false,
            'database' => '..\kaine_email.db',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
            'quoteIdentifiers' => false,
            'url' => env('DATABASE_URL', null),
        ],
    ],
```
and any other relevant configuration.
