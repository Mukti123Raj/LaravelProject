<html>
    <body>
        <h1>Contact Us</h1>
        <p>This is the Contact us page.</p>
        <h2>Name: {{ $name }}</h2>
        <h2>ID: {{ $id }}</h2>

        @include('SubViews.Input', ['placeholder' => 'Enter your name'])
    </body>
</html>
