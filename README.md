# PHPUnit training

##### Feel free to fork, clone and download this repository
Training project for PHPUnit newbies and those who want to practice. 
Using new PHPUnit 6.* and Symfony 4.0.*

### Requirements
- PHP 7.1^

### Getting started with project:
Run ```composer install``` for downloading dependencies

There is no views in project, it is only phpunit ready.

Run ```php vendor/bin/phpunit -c phpunit.xml.dist``` to run tests on terminal

### Run with dockers
```docker build -t phpunit-training .```

```docker run -d -v $(pwd):/app --name phpunit-training -p 22:22 phpunit-training```

#### To run commands in the container:
```docker exec -ti phpunit-training phpunit {Your/Test/Class.php}```  to run from docker

Also, it is possible to connect by ssh (user: root, passw: root)

