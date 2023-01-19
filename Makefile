# Colors
C_RED = \033[1;31m
C_GREEN = \033[1;32m
C_L_BLUE = \033[1;34m
C_RES = \033[0m
C_YELLOW=\033[0;33m
C_PURPLE=\033[0;35m
BRed=\033[1;31m
BGreen=\033[1;32m
BYellow=\033[1;33m
BWhite=\033[1;37m
BPurple=\033[1;35m

all : help

up : 
	@docker-compose -f ./srcs/docker-compose.yml up -d
	@echo "$(C_GREEN)[Containers up!]$(C_RES)"

down : 
	@docker-compose -f ./srcs/docker-compose.yml down
	@echo "$(C_RED)[Containers down!]$(C_RES)"

stop : 
	@docker-compose -f ./srcs/docker-compose.yml stop
	@echo "$(C_RED)[Containers stopped!]$(C_RES)"

start : 
	@docker-compose -f ./srcs/docker-compose.yml start
	@echo "$(C_GREEN)[Containers started!]$(C_RES)"

restart : 
	@docker-compose -f ./srcs/docker-compose.yml restart
	@echo "$(C_GREEN)[Containers restarted!]$(C_RES)"

vol:
	@sudo docker volume rm mariadb
	@sudo docker volume rm wordpress

img:
	@sudo docker image rm -f nginx mariadb wordpress

fclean : vol
	@sudo docker image rm -f nginx mariadb wordpress


ps : 
	@docker ps


help : 
	@echo "$(BYellow)make up$(BWhite): to run the docker-compose file"
	@echo "$(BYellow)make down$(BWhite): to stop and remove the containers and networks"
	@echo "$(BYellow)make stop$(BWhite): to stop the services"
	@echo "$(BYellow)make start$(BWhite): to start services"
	@echo "$(BYellow)make restart$(BWhite): to restart service containers"
	@echo "$(BPurple)make logs$(BWhite): to view the output from containers"
	@echo "$(BPurple)make ls$(BWhite): to list the running compose projects"

git: 
	@git add .
	@git commit -m "$m"
	@git push -u origin master 