# AbsoluteBeginner
Sandbox for experiments in PHP and Heroku hosting

## Heroku
To push changes to Heroku:
```
git push heroku main
```
The local changes has to be committed, at least locally, before.

### Troubleshooting
Logging in to Heroku:
```
heroku login
```
You will be redirected to the Heroku login page.

In case the connection between the local git repo and the (already existing) Heroku app is missing, a remote has to be set.  
You need to add a remote to your local repository with the heroku git:remote command, via the Heroku app’s name:
```sh
heroku git:remote -a [app-name] # i.e.: morning-brushlands-89248
```
## PHP / MySQL
To allow accessing Heroku remote DB server from local PHP Admin, add the following lines to `[xampp installation folder]\phpMyAdmin\config.inc.php`:
```php
/* Heroku remote server */
$i++;
$cfg['Servers'][$i]['host'] = 'us-cdbr-east-04.cleardb.com';
$cfg['Servers'][$i]['user'] = 'b7ed82d9cf471d';
$cfg['Servers'][$i]['password'] = '904b6d15';
$cfg['Servers'][$i]['auth_type'] = 'config';
```
Where `host`, `user` and `password` can be found in the `ClearDB_URL.txt` obtained when configuring the MySQL support for the Heroku app.  
The same data can be obtained from the `Config Vars` section in the app dashboard in Heroku, embedded in the `CLEARDB_DATABASE_URL` variable:
```
mysql://b7ed82d9cf471d:904b6d15@us-cdbr-east-04.cleardb.com/heroku_916d789ce96685f?reconnect=true
```
test new pc