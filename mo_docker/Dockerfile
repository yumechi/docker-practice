FROM ubuntu:20.04
MAINTAINER yumechi

RUN apt-get update && apt-get install -y curl locales language-pack-ja-base language-pack-ja \
    && locale-gen ja_JP.UTF-8
ENV LANG ja_JP.UTF-8

ENV EXEC_USER yumechi
ENV EXEC_HOME /home/${EXEC_USER}
ENV EXEC_SHELL /bin/bash

# add sudo user
RUN groupadd -g 1000 developer && \
    useradd  -g      developer -m -s /bin/bash ${EXEC_USER} && \
    echo "${EXEC_USER}:password" | chpasswd

USER ${EXEC_USER}
WORKDIR ${EXEC_HOME}

RUN curl -sSL https://git.io/get-mo -o mo
RUN chmod +x mo
RUN mkdir -p ~/.local/bin/
RUN mv mo ~/.local/bin/
ENV PATH $PATH:~/.local/bin

RUN mkdir -p template
COPY template ${EXEC_HOME}/template
