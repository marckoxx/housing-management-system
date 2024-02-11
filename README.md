**Requirements:**

- [Node JS](https://nodejs.org/en)
- [Composer](https://getcomposer.org/download/)
- [XAMPP](https://www.apachefriends.org/download.html) or any MySQL Client
- [Git](https://git-scm.com/downloads)
- [VSCode](https://code.visualstudio.com/Download) or your IDE of choice

**Steps:**

Clone this repo

`git clone https://github.com/marckoxx/housing-management-system`

`cd webdevfinals`

Using powershell (won't work on CMD):

`cp ./.env.example .env`

or just copy the contents of .env.example to a new file called .env

`composer install`

`php artisan key:generate`

`php artisan migrate --seed`

`npm install`

If you're using vscode:

`code .`

Otherwise open the folder in your IDE and proceed.

On one terminal:

`npm run dev`

On another terminal:

`php artisan serve`

You should be able to access the project in your browser now.
