# Mercure implementation in symfony with minimal configuration

#### steps to publish and listen to mercure
  * run the following command
    ```$xslt
        ./mercure --jwt-key='aVerySecretKey' --addr='localhost:3000' --allow-anonymous --cors-allowed-origins='*'
    ```
    * you can listen to any other address, in this case localhost:3000 is used.
    * replace "aVerySecretKey" with your secret key
  * replace the "MERCURE_JWT_TOKEN" with jwt token signed by your secret key
    ```$xslt
        MERCURE_PUBLISH_URL=http://localhost:3000/.well-known/mercure
        MERCURE_JWT_TOKEN=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOltdfSwianRpIjoiOTY5NGEzMWMtNDc4ZS00YjQzLWEwMzctMTA1ZjQyMWU1NDFkIiwiaWF0IjoxNTgzMDkxMzgyLCJleHAiOjE1ODMwOTQ5ODJ9.E7TV6_KzcFW3v-l7FdWoBoeqi5-TW0lGD65HeaQWR-o
    ```
