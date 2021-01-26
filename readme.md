## Devian task
This project built on Laravel framework

## Installation Steps
 - Build docker image
    * docker build -t devian-task-image:v1 . 
 - Build container 
    * docker run --name devian-task -d -p 8154:80 devian-task-image:v1