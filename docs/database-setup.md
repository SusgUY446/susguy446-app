## create the database

1. go to localhost/phpmyadmin

2. click on NEW (its above all the databases)

3. choose a name and select latin1_bin

4. click create


## create the table

1. go into your new database.

2. open the console

3. enter this command `CREATE TABLE accounts (USERNAME varchar(255), PASSWORD varchar(255));`

4. execute it.

## connect it to the code

1. go to the `mysql.php` file

2. change `$name = "prod";` to `$name = "YOUR_DATABASE_NAME";`



## Now you can use it.

