# mo をうごかしてみる

* https://github.com/tests-always-included/mo

# まだよくわかってない

* [ ] ファイルのマウント
* [ ] 本当はテンプレートファイルの結果を外から入れて、中から取り出したい
    * [ ] cmd コマンドとか使えば行けるやつ？

# 読んだ

* 操作回り
    * [docker build | Docker Documentation](https://docs.docker.com/engine/reference/commandline/build/)
    * [Dockerfile のベストプラクティス — Docker-docs-ja 1.9.0b ドキュメント](http://docs.docker.jp/engine/articles/dockerfile_best-practice.html)
    * [Best practices for writing Dockerfiles | Docker Documentation](https://docs.docker.com/develop/develop-images/dockerfile_best-practices/)
    * [Dockerfile リファレンス — Docker-docs-ja 17.06 ドキュメント](http://docs.docker.jp/engine/reference/builder.html)
    * [Dockerコマンドメモ - Qiita](https://qiita.com/curseoff/items/a9e64ad01d673abb6866)
    * [［docker］ COPY とADD の違いを試してみた - Qiita](https://qiita.com/hihihiroro/items/0956326d6731bc927166)
    * [Dockerコンテナのシェルの中に入る - Qiita](https://qiita.com/__cooper/items/4740c24666299c366044)
    * [DockerfileのADDとuseraddのPermission denied | masato's blog](https://masato.github.io/2014/06/24/docker-devenv-adduser-add-permission-denied/)
* ユーザーを切る
    * [Docker コンテナ内に一般ユーザーを作成する](https://zukucode.com/2019/06/docker-user.html)
        * この記事を割と参考に yumechi ユーザーを作った
    * [Dockerコンテナ内にsudoユーザを追加する - Qiita](https://qiita.com/iganari/items/1d590e358a029a1776d6)
* 日本語化
    * [Docker＋Ubuntuで日本語入力できないのを解決した](https://blog.nocorica.jp/2017/01/docker-ubuntu-japanese-input/)
        * この設定が最小限でスマートだった
    * [【Docker】Docker環境内で日本語入力 - Qiita](https://qiita.com/yokoto/items/fc2ecdc0a7a5e14bdcaa)

# 実行してみた

```sh
❯ docker build -t yumechi/mobuntu .
❯ docker run --name yumechi-mobuntu  -itd yumechi/mobuntu:latest
❯ docker exec -i -t yumechi-mobuntu bash
❯ docker exec -i -t yumechi-mobuntu bash
yumechi@afb691c72b78:~$ NAME=南みれぃ LIVE_PLACE="You Tube" mo template/fun-trip.mo
こんにちは、私は 南みれぃ ！ よろしくね！

最近は You Tube で配信してるよ！ よかったら遊びに来てね！
```

うごいた