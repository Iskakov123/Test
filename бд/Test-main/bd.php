<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "restoran");

if ($link == false){
    $no = "Ошибка: Невозможно подключиться к MySQL "; 
    mysqli_connect_error();
}
else {
    $yes = "Соединение установлено успешно";
}

$bludo = 'SELECT bludo_id, photo, name, menu_id, sostav, massa, products FROM `bludo`';
$clients = 'SELECT clients_id, name, birthday, zakazi_id, manu_id FROM `clients`';
$menu = 'SELECT menu_id, name FROM `menu`';
$products = 'SELECT products_id, name FROM `products`';
$zakazi = 'SELECT zakazi_id, name FROM `zakazi`';

$name = $_POST['name'];
$priceValue = $_POST['price'];

switch ($_POST['table']) {
    case "bludo":
        $sql = $bludo;
        $say = "bludo";
        break;
    case "clients":
        $sql = $clients;
        $say = "clients";
        break;
    case "menu":
        $sql = $menu;
        $say = "menu";
        break;
    case "products":
        $sql = $products;
        $say = "products";
        break;
    case "zakazi":
        $sql = $zakazi;
        $say = "zakazi";
        break;
    default:
    $say = "Выберите таблицу из списка";
}

if ($sql) 
{
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>mySQL</title>
  </head>
  <body>
    <div class="wrapper" id="wrapper">
    <div class="register__block">
            <div class="container">
                <div class="register">
                    <a href="#">Регистрация</a>
                    <a href="#">Вход</a>
                </div>
            </div>
        </div>
        <div class="market pt-3">
            <div class="container">
                <div class="row mt-4">
                  <div class="col-12 col-xs-12 col-md-12 col-lg-3 imgWidth d-flex d-lg-block justify-content-center">
                    <a href="#" class="w-50 w-lg-80 d-block d-lg-inline"> <img src="image/image/logo.svg" class=" p-3" alt=""></a>
                  </div>
                  <div class="col-12 d-flex flex-column text-center col-xs-4 col-md-4 col-lg-3">
                    

                                      <!-- Button trigger modal -->
                  <button type="button border-button" class="btn  px-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Волгоград
                  </button>
                  <div class="">
                    <small>Часы работы: с 9-00 до 17-30, Выходной: суббота, воскресенье. </small>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-body">
                          <div class="row">
                            <div class="d-flex justify-content-between">
                              <h5 class="modal-title" id="exampleModalLabel"><strong>Выберите свой город</strong></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                            <div class="mb-3">или ближайший к вам</div>
                            <div class="mb-2"><strong>Россия</strong></div>
                            <div class="col-sm ">
                              <div><a href="#">Москва</a></div>
                              <div><a href="#">Санкт-Петербург</a></div>
                              <div><a href="#">Краснодар</a></div>
                              <div><a href="#">Архангельск</a></div>
                              <div><a href="#">Барнаул</a></div>
                              <div><a href="#">Брянск</a></div>
                              <div><a href="#">Владивосток</a></div>
                              <div><a href="#">Волгоград</a></div>
                              <div><a href="#">Воронеж</a></div>
                              <div><a href="#">Екатеринбург</a></div>
                              <div><a href="#">Ижевск</a></div>
                              <div><a href="#">Иркутск</a></div>
                              <div><a href="#">Казань</a></div>
                              <div><a href="#">Кемерово</a></div>
                              <div><a href="#">Киров</a></div>
                              <div><a href="#">Красноярск</a></div>
                              <div><strong>Казахстан</strong></div>
                              <div><a href="#">Алматы</a></div>
                              
                            </div>
                            <div class="col-sm">
                              <div><a href="#">Курган</a></div>
                              <div><a href="#">Курск</a></div>
                              <div><a href="#">Челны</a></div>
                              <div><a href="#">Нижний</a></div>
                              <div><a href="#">Новосибирск</a></div>
                              <div><a href="#">Омск</a></div>
                              <div><a href="#">Орёл</a></div>
                              <div><a href="#">Оренбург</a></div>
                              <div><a href="#">Пенза</a></div>
                              <div><a href="#">Пермь</a></div>
                              <div><a href="#">Петропавловск-К</a></div>
                              <div><a href="#">Пятигорск</a></div>
                              <div><a href="#">Ростов-на-Дону</a></div>
                              <div><a href="#">Салехард</a></div>
                              <div><a href="#">Самара</a></div>
                              <div><a href="#">Саранск</a></div>
                              <div><strong>Кыргызстан</strong></div>
                              <div><a href="#">Бишкек</a></div>
                            </div>
                            <div class="col-sm">
                              <div><a href="#">Саратов</a></div>
                              <div><a href="#">Сочи</a></div>
                              <div><a href="#">Ставрополь</a></div>
                              <div><a href="#">Сургут</a></div>
                              <div><a href="#">Сыктывкар</a></div>
                              <div><a href="#">Тамбов</a></div>
                              <div><a href="#">Томск</a></div>
                              <div><a href="#">Тюмень</a></div>
                              <div><a href="#">Улан-Удэ</a></div>
                              <div><a href="#">Ульяновск</a></div>
                              <div><a href="#">Уфа</a></div>
                              <div><a href="#">Хабаровск</a></div>
                              <div><a href="#">Чебоксары</a></div>
                              <div><a href="#">Южно-Сахалинск</a></div>
                              <div class="font-size0"> s</div>
                              <div class="font-size0"> s</div>
                              <div><strong>Узбекистан</strong></div>
                              <div><a href="#">Ташкент</a></div>
                            </div>
                            <div class="bottom-text mt-3">
                             <img class="" src="image/icons/city_sklad_icon.png" alt=""> Город с офисом продаж и складом
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                      </div>
                    </div>
                  </div>



                  </div>
                  <div class="col-12 col-xs-4 col-md-4 text-align col-lg-3">
                    <img src="image/icons/phone-call.png" class="icon" alt=""> <span class="font-size20">8 (8442) 98-73-13</span>
                    <div><small>отдел продаж (многоканальный)</small></div>
                  </div>
                
                  <div class="col-6 col-xs-4 col-md-4 dellToMobiles col-lg-3">
                      <img src="image/icons/shopping-cart.png" alt=""> <a href="#" class="font-size20 link-dark text-decoration-none">
                        Корзина
                      </a>
                      <div class="text-info"><small>Ваша корзина пуста</small></div>
                  </div>
                </div>
              </div>
              
        </div>
        <div class="header-menu">
          <div class="container">
            <nav class="navbar navbar-expand-xl navbar-dark bg-success mt-4" >
              <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ОБОРУДОВАНИЕ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ПОСУДА И ИНВЕНТАРЬ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        МЕБЕЛЬ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ПРОФ.ХИМИЯ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        АВТОМАТИЗАЦИЯ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ЗАПЧАСТИ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        УСЛУГИ
                      </a>
                      <ul class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
                        <div class="d-flex">
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>                          
                          <div class="col-4">
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Another action</a></li>
                            <li class="links"><a class="dropdown-item" href="#">Something else here</a></li>
                          </div>
                        </div>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">КОНТАКТЫ</a>
                    </li>
                    
                </div>
              </div>
            </nav>
            <div class="search mt-3">
              <nav class="navbar navbar-light bg-light ">
                <div class="container-fluid">
                  <form class="d-flex col-12">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Найти</button>
                  </form>
                </div>
              </nav>
            </div>
            <div class="slider mt-4">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="image/image/162f2a918c94fba557ba0dd38027bd22.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/image/e0a108a5c173a7c1bef1a1c7609632d5.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="image/image/ed8b2986a9919a237768142185d298e3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Следующий</span>
                </button>
              </div>
            </div>
            <div class="my-5">
            <main class="main py-5">
                <div class="container">
                    <h3 class="pb-2">Форма выбора</h3>
                    <form action="#" method="post">
                        <div class="row align-items-center justify-content-center border px-3 py-4">
                        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                              <label for="select" class="form-label">Таблица</label>
                              <select class="form-select" id="select" name="table" aria-label="Default select example">
                                <option value="null" selected>Открыть список</option>
                                <option value="bludo">bludo</option>
                                <option value="clients">clients</option>
                                <option value="menu">menu</option>
                                <option value="products">products</option>
                                <option value="zakazi">zakazi</option>
                              </select>
                              </div>
                              <button type="submit" class="btn btn-primary w-100 my-3"><u>Получить результат</u></button>
                        </div>
                      </form>
                      <h3 class="mt-5 mb-3">Результат</h3>
                      <div class="pb-3">
                          <? if ($_POST['table'] !== "null" && $_POST['table'])
                          {
                           echo "Выбрана таблица: " . $say;
                          }
                          else if ($_POST['table'] == "null" && !$name || !$_POST['table'])
                          {
                            echo "Выберите таблицу";
                          }
                          else
                          {
                            echo "Выберите таблицу";
                          }
                          ?>
                      </div>
                        <?php if (($say == "bludo") && is_array($rows) || is_object($rows))
                        {
                            ?>
                            <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">photo</th>
                            <th scope="col">name</th>
                            <th scope="col">menu_id</th>
                            <th scope="col">sostav</th>
                            <th scope="col">massa</th>
                            <th scope="col">products</th>
                            </thead>
                            <tbody>
                            <?
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['bludo_id'] . '</td>';
                                echo '<td>' . $row['photo'] . '</td>';
                                echo '<td>' . $row['menu_id'] . '</td>';
                                echo '<td>' . $row['sostav'] . '</td>';
                                echo '<td>' . $row['massa'] . '</td>';
                                echo '<td>' . $row['products'] . '</td>';
                                echo '<tr>';                
                            }
                            ?>
                            </tbody>
                            </table>
                            <?
                        }
                            ?>
                        
                            <?php if (($say == "clients") && is_array($rows) || is_object($rows))
                        {
                            ?>
                            <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">	birthday</th>
                            <th scope="col">	zakazi_id</th>
                            <th scope="col">manu_id</th>
                            </thead>
                            <tbody>
                            <?
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['clients_id'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<td>' . $row['birthday']  . '</td>';
                                echo '<td>' . $row['zakazi_id'] . '</td>';
                                echo '<td>' . $row['manu_id'] . '</td>';
                                echo '<tr>';                
                            }
                            ?>
                            </tbody>
                            </table>
                            <?
                        }
                            ?>



                            <?php if (($say == "zakazi") && is_array($rows) || is_object($rows))
                        {
                            ?>
                            <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            </thead>
                            <tbody>
                            <?
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['zakazi_id'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<tr>';                
                            }
                            ?>
                            </tbody>
                            </table>
                            <?
                        }
                            ?>

                            <?php if (($say == "products") && is_array($rows) || is_object($rows))
                        {
                            ?>
                            <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">student_id</th>
                            </thead>
                            <tbody>
                            <?
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['products_id'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<tr>';                
                            }
                            ?>
                            </tbody>
                            </table>
                            <?
                        }
                            ?>

                            <?php if (($say == "menu") && is_array($rows) || is_object($rows))
                        {
                            ?>
                            <table class="table">
                            <thead>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            </thead>
                            <tbody>
                            <?
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>' . $row['menu_id'] . '</td>';
                                echo '<td>' . $row['name'] . '</td>';
                                echo '<tr>';                
                            }
                            ?>
                            </tbody>
                            </table>
                            <?
                        }
                            ?>
                      <div class="mt-4">
                      <?php print($yes); ?>
                      </div>
                </div>
            </main>
        </div>
          </div>
        </div>
    </div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/bd.js"></script>
  </body>
</html>