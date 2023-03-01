# NEWS Agregator website

### Description

 A news aggregator website that pulls articles from various sources and displays them in a clean, easy-to-read format.

### How to build

It has two folders reactjs ( frontend ) techstack ``react, javascript`` and server ( backend ) techstack ``php, laravel``

Every root bolders ( reactjs and server ) has Dockerfile and docker compose to start from beginning server ( backend ).

#### Server ( backend )

```bash
$ cd server
$ cp .env.example .env # copy example env to env 
#Note: please update the env with real variables please read the comments in env file to how to get them.
$ docker compose build
$ docker compose up -d    
```

#### reactjs ( frontend )

```bash
$ cd reactjs
# Note frontend uses proxy read more: https://create-react-app.dev/docs/proxying-api-requests-in-development/
$ docker compose build
$ docker compose up -d
```

# TO-Do

1. Production setup with nginx
2. Write infrastructure file on terraform
