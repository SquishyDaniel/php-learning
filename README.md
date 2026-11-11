# PHP Learning Stuff

## Running
This project makes use of Docker to deploy [MariaDB](https://mariadb.org/), 
[Apache](https://httpd.apache.org/), and 
[PHP's built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php).

The following command should start MariaDB at port `6603`, Apache at port 
`8000`, and the PHP built-in development server at port `9000`:

```sh
$ docker compose up
```

Depending on your platform you may need to access the Apache page from 
[`http://host.docker.internal:8000`](http://host.docker.internal:8000) (or port `9000` for the PHP dev server.)