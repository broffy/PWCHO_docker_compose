# LABORATORIUM NR 8 Docker Compose.
Piotr Wojtowicz
## build

```
git clone https://github.com/broffy/pwcho_docker-compose.git
cd pwcho_docker-compose
docker-compose up
```


#### Mozilla Firefox

W konfiguracji przeglądarki ```about:config``` należy utworzyć preferencję typu *string* o nazwie ```network.security.ports.banned.override``` i nadać temu polu wartość ```6666```.

#### Google Chrome

Wystarczy uruchomić przeglądarkę z parametrem ```--explicitly-allowed-ports=6666```.

### Uruchomienie aplikacji.

Po '`docker-compose up`' przejść na adres `localhost:6666`.
