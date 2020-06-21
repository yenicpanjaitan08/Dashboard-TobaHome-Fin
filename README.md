1. Clone atau download source code
    - Para terminal, clone repo 'https://github.com/yenicpanjaitan08/Dashboard-Admin-TobaHome'
    - atau `git clone 'https://github.com/yenicpanjaitan08/Dashboard-Admin-TobaHome'
    - Jika tidak menggunakan Git, silakan **Download Zip** dan *extract* pada direktori web server (misal: xampp/htdocs)
2. `composer install`
3. `cp .env.example .env`
    - Jika tidak menggunakan Git rename file `.env.example` menjadi `.env`
4. Sesuaikan nama db yang akan digunakan nanti pada kedua file '.env' dan '.env.example'
5. Pada terminal `php artisan key:generate`
6.Pada terminal 'php artisan migrate'

Jika ingin menggunakan db yang tersedia 
7. Buat **database pada mysql** untuk sistem ini

8. **Setting database** pada file `.env`
    ```
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=toba
    DB_USERNAME=root
    DB_PASSWORD=
    ```

9. `php artisan serve`
10. Selesai
