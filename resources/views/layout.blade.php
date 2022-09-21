<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


{{--Далі необхідно зібрати кілька шаблонів для створення/редагування/видалення сутностей. Для Категорій та Тегів.--}}

{{--list.php // виведення категорій табличкою--}}
{{--create-category.php // форма для створення нової категорії--}}
{{--update.php // форма для редагування категорії--}}
{{--delete-category.php // видалення категорії та редирект на список--}}

{{--list-tags.php // виведення тегів табличкою--}}
{{--create-tag.php // форма для створення нового тега--}}
{{--update-tag.php // форма для редагування тега--}}
{{--delete-tag.php // видалення тега та редирект на список--}}