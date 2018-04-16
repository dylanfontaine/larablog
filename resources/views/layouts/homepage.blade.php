<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dylan's Laravel Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>

<body>

<div class="container">
    @include ('layouts.header')

    @include ('layouts.nav')

    @include ('posts.featured-main')

    <div class="row mb-2">
        <div class="col-md-6">
           @include ('posts.featured-teaser')
        </div>
        <div class="col-md-6">
            @include ('posts.featured-teaser')
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            @yield ('content')<!-- /.blog-main -->
        </div>

        <aside class="col-md-4 blog-sidebar">
            @include ('layouts.about')

            @include ('layouts.archive')

            @include ('layouts.social')
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->

@include ('layouts.footer')

</body>
</html>
