# php8-docker
php8버전 테스트를 위한 도커 구성

php 8.1 기능 테스트를 위한 도커 파일과 php 파일

### docker build
~~~shell
  docker build -t php8-docker .
~~~

### docker run
~~~shell
  docker run -d -it -p {localPort}:{internalDockerPort} -v {localPath}/{projectDirectory}/:/var/www/html php8-docker:latest
~~~
