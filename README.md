# BookHub


Web eBook repository system with active directory login support

## Installation

### Pull down latest version 

From the terminal, run the following commands:

`git clone https://github.com/allistera/bookhub.git`

You will then be prompted to enter your GitHub username and password, once this has been done a new folder called bookhub that contains the contents of the repo.

Alternatively use the GitHub Mac OSX App to import in a new repo.

### Configure Database

You will need to enter your MySQL database username and password credentials into /application/config/database.php under 'Database Connections'

### Create Database

Open a terminal window, and cd into the BookHub directory.

Run the following commands:

`php artisan migrate:install`
`php artisan migrate`
