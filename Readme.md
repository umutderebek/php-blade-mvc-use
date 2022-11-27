# php + blade + custom mvc

I'd switch to .core php cuz some saml project's not working properly on laravel.
Maybe later I might be able to add some ORM & SAML technologies for this project

--
To do List
--

1-) Php exceptions & Error handlers<br>
2-) Folder & file security<br>
3-) XSS protection vulnerability<br>
4-) Hash<br>
5-) Httponly Cookie<br>
6-) Crf Token<br>
7-) Sql Injection<br>
8-) SAML SSO tecnologie


## Install dependencies via Composer

```
composer update
```

## Configuration
### In config.php
Enter base url for proper URL generation:

``` php
const BASE_URL = 'http://localhost';
```

### In database/db.php
Manage for your settings.php



* Create a 'controller' for each page in the `controller/` folder
``` php

use eftec\bladeone\BladeOne;

class Deneme extends Controller {

    public function index()
    {
        $blade = new BladeOne(); 

        echo $blade->run("welcome",array("variable1"=>"value1")); 
    }

    public function index2()
    {
        echo "deneme index method 2";
    }
}
```

* After that you can change or create another page's `view/` folder
```
example.blade.php
```

* Some Routes in `index.php` file, dont miss your third options when you doing that post proccess :) 
```
Route::run('/deneme2','deneme@index2');

Route::run('/post','deneme@post','post');
```
