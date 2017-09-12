# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: jle-quer <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2017/09/12 15:47:12 by jle-quer          #+#    #+#              #
#    Updated: 2017/09/12 15:47:43 by jle-quer         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

SRC_NAME =	Colleen.c \

NAME = Colleen

FLAGS = -Wall -Werror -Wextra

OBJET = $(SRC_NAME:.c=.o)

all: $(NAME)

$(NAME): $(OBJET)
	@clang $(FLAGS) $(OBJET) -o $(NAME)

clean:
	@rm -f $(OBJET)

fclean: clean
	@rm -rf $(NAME)

re: fclean all
