LaravelAngularSampleApp
=======================

You can either download it via
https://github.com/mithundas79/LaravelAngularSampleApp/raw/master/apiangularjs.zip

or you can normally get it from the repo it is public... however put it onto /var/www
so that it becomes

/var/www/apiangularjs

then run following onto your terminal:-

cd /var/www/apiangularjs
sudo chmod 777 -R app/storage

then just browse:-

http://localhost/apiangularjs/public/

I have bootstrap cdn for the css part....
Check following codes:-

Laravel routes:- app/routes.php
Laravel restapi controller:- app/controllers/MathsController.php
Laravel view:- public/views/maths/index.blade.php

Angular app:- public/js/app.js
Angular controller:- public/js/controllers/main.Ctrl.js
Angular service public/js/services/services.js
