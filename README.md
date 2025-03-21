# アプリケーション名
mogitate

## 環境構築
```
~$  cd coachtech/laravel
~/coachtech/laravel$ git clone git@github.com:coachtech-material/laravel-docker-template.git
~/coachtech/laravel$  mv laravel-docker-template mogitate
~/coachtech/laravel$ cd mogitate
~/coachtech/laravel/mogitate$ git remote set-url origin git@github.com:sakaki839/mogitate.git
~/coachtech/laravel/mogitate$ git remote -v
~/coachtech/laravel/mogitate$ git add .
~/coachtech/laravel/mogitate$  git commit -m "リモートリポジトリの変更"
~/coachtech/laravel/mogitate$ git push origin main
~/coachtech/laravel/mogitate$  docker-compose up -d --build
~/coachtech/laravel/mogitate$ code .
~/coachtech/laravel/mogitate$ docker-compose exec php bash
/var/www# composer install
/var/www# cp .env.example .env
/var/www# exit
```




## 使用技術（実行環境）
- Dockerバージョン 27.3.1
- laravelバージョン  8.83.8
- gitバージョン　 2.43.0


## ER図



## URL
- もぎたて:   http://localhost/
- phpmyadmin:  http://localhost:8080/
