
# Cara Instal dan Running




## Download Project

Clone the project

```bash
 git Clone https://github.com/sabilanm/resep.git
```

Go to the project directory

```bash
  cd resep
```

Install dependencies

```bash
  composer Install
```



## Database

import file metamata.sql in phpmyadmin

change database in file .env
```bash
  DB_DATABASE=metamata
  DB_USERNAME=root
  DB_PASSWORD=
```
    
## Running

To run tests, run the following command

```bash
  php artisan serve
```

