<?php
/**
 * Created by PhpStorm.
 * User: Operator1
 * Date: 08.08.2017
 * Time: 2:26
 */
if (empty($_POST)) return false;
//var_dump($_POST);
//var_dump($_FILES);
// var_dump($_POST);
$dsn = "mysql:host=127.0.0.1;dbname=c2";
try {
    $conn = new PDO($dsn, 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

/*$sql = 'SELECT * FROM opros_subways
        WHERE opros_subways_uid = :user_id';
$stmt = $conn->prepare($sql);
$stmt->execute([
    'user_id' => $_SESSION['user_id'],
]);
$user = $stmt->fetchAll();*/
//var_dump($user);

if (isset($_POST)) {
    $sql = 'INSERT INTO opros_subways (opros_subways_uid, opros_subways_subway, opros_subways_quantity) VALUES (?, ?, ?)';
    array($_POST['answers']);
    $insertData = array();
    foreach ($_POST['answers'] as $value) {
        $insertData[] = $value['value'];
    }
    $stmt = $conn->prepare($sql);
    $stmt->execute($insertData);
}

/*if (isset($_POST['answers'])) {
	$sql = 'INSERT INTO opros (uid, question, type) VALUES ';
	$insertQuery = array();
	$insertData = array();
	foreach ($_POST['answers'] as $item) {
		$insertQuery[] = '(?, ?, ?)';
		$insertData[] = $_SESSION['user_id'];
		$insertData[] = $item['name'];
		$insertData[] = $item['value'];
	}
	$sql .= implode(', ', $insertQuery);
	$stmt = $conn->prepare($sql);
	$stmt->execute($insertData);
}*/

/*$sql = 'SELECT * FROM opros
        WHERE uid = :user_id
        AND FIND_IN_SET(question, :questions)';
try {
	$stmt = $conn->prepare($sql);
	$stmt->execute([
		'user_id' => $_SESSION['user_id'],
		'questions' => implode(',', $_POST['items'])
		]);
	//$items = $stmt->fetchAll();
} catch (PDOException $e) {
	echo ('Ошибка: ' . $e->getMessage());
	return false;
}*/

if(empty($user)){
//if(false){
    ?>
    <script type="text/javascript">
        $(".kvib").select2({
            placeholder: "Начните вводить название станции",
            language: "ru"
        });
        $(".quantity").select2({
            placeholder: "Введите цифру",
            language: "ru"
        });

    </script>
    <form id="notes-poll" action="#" >
        <!-- <div class="panel panel-danger"> -->
        <!-- 	<p><div class="opros">&nbsp;&nbsp;Введите текст:</div></p> -->

        <input type="text" name="user_id" id="user_id" hidden="true" value="<?php echo $_SESSION['user_id']?>">
        <div class="form-group">


            <h4>Выберите одну удобную станцию метро, откуда Вы сможете забрать коллег:</h4>

            <select  class="kvib" id="kvib" name="kvib" required="true">
                <option></option>
                <optgroup id ='kv' label="Кировско-Выборгская линия">

                    <option value="Автово">Автово</option>
                    <option value="Академическая">Академическая</option>
                    <option value="Балтийская">Балтийская</option>
                    <option value="Владимирская">Владимирская</option>
                    <option value="Выборгская">Выборгская</option>
                    <option value="Гражданский проспект">Гражданский проспект</option>
                    <option value="Девяткино">Девяткино</option>
                    <option value="Кировский завод">Кировский завод</option>
                    <option value="Ленинский проспект">Ленинский проспект</option>
                    <option value="Лесная">Лесная</option>
                    <option value="Нарвская">Нарвская</option>
                    <option value="Площадь Восстания">Площадь Восстания</option>
                    <option value="Площадь Ленина">Площадь Ленина</option>
                    <option value="Площадь Мужества">Площадь Мужества</option>
                    <option value="Политехническая">Политехническая</option>
                    <option value="Проспект Ветеранов">Проспект Ветеранов</option>
                    <option value="Пушкинская">Пушкинская</option>
                    <option value="Технологический институт I">
                        Технологический институт I</option>
                    <option value="Чернышевская">Чернышевская</option>
                </optgroup>
                <optgroup label="Московско-Петроградская линия">

                    <option value="Горьковская">Горьковская</option>
                    <option value="Звёздная">Звёздная</option>
                    <option value="Купчино">Купчино</option>
                    <option value="Московская">Московская</option>
                    <option value="Московские ворота">Московские ворота</option>
                    <option value="Невский проспект">Невский проспект</option>
                    <option value="Озерки">Озерки</option>
                    <option value="Парк Победы">Парк Победы</option>
                    <option value="Парнас">Парнас</option>
                    <option value="Пионерская">Пионерская</option>
                    <option value="Петроградская">Петроградская</option>
                    <option value="Проспект Просвещения">Проспект Просвещения</option>
                    <option value="Сенная площадь">Сенная площадь</option>
                    <option value="Технологический институт II">Технологический институт II</option>
                    <option value="Удельная">Удельная</option>
                    <option value="Фрунзенская">Фрунзенская</option>
                    <option value="Чёрная речка">Чёрная речка</option>
                    <option value="Электросила">Электросила</option>
                </optgroup>

                <optgroup label="Невско-Василеостровская линия">
                    <option value="Василеостровская">Василеостровская</option>
                    <option value="Гостиный двор">Гостиный двор</option>
                    <option value="Елизаровская">Елизаровская</option>
                    <option value="Ломоносовская">Ломоносовская</option>
                    <option value="Маяковская">Маяковская</option>
                    <option value="Обухово">Обухово
                    </option>
                    <option value="Площадь Александра Невского I">Площадь Александра Невского I</option>
                    <option value="Приморская">Приморская</option>
                    <option value="Пролетарская">Пролетарская</option>
                    <option value="Рыбацкое">Рыбацкое</option>



                </optgroup>
                <optgroup label="Правобережная линия">

                    <option value="Спасская">Спасская</option>
                    <option value="Достоевская">Достоевская</option>
                    <option value="Лиговский проспект">Лиговский проспект</option>
                    <option value="Площадь Александра Невского II ">Площадь Александра Невского II </option>
                    <option value="
Новочеркасская">
                        Новочеркасская</option>
                    <option value="Ладожская">Ладожская</option>
                    <option value="Проспект Большевиков">Проспект Большевиков</option>
                    <option value="
Улица Дыбенко">
                        Улица Дыбенко</option>
                </optgroup>
                <optgroup label="Фрунзенско-Приморская линия">

                    <option value="Адмиралтейская">Адмиралтейская</option>
                    <option value="Бухарестская">Бухарестская</option>
                    <option value="
Волковская">
                        Волковская</option>
                    <option value="Звенигородская">Звенигородская</option>
                    <option value="Комендантский проспект">Комендантский проспект</option>
                    <option value="Крестовский остров">Крестовский остров</option>
                    <option value="Международная">Международная</option>
                    <option value="Обводный канал">Обводный канал</option>
                    <option value="Садовая">Садовая</option>
                    <option value="Спортивная">Спортивная</option>
                    <option value="Старая Деревня">Старая Деревня</option>
                    <option value="Чкаловская">Чкаловская</option>
                </optgroup>
            </select>
            <h4>Сколько человек сможете забрать?</h4>
            <select class="quantity" name="quantity" id="quantity" required="true">
                <option></option>

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>

            </select>
        </div>



        <div class="clearfix"></div>
        <button type="submit" class="btn btn-danger btn-large">Отправить</button>
    </form>
    <?php
} else {
    ?>

    <div class="panel panel-danger"><h1 class="panel-title"><span class="glyphicon glyphicon-arrow-right"></span>Спасибо за ваше мнение! Принять участие в опросе можно только один раз.</h1></div>
    <?php
}
return true;