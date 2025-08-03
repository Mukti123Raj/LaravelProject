<html>
    <body>
        <h1>About Us</h1>
        <p>This is the about us page.</p>
        <h2>Name: {{request()->name}}</h2>
        <h2>ID: {{request()->id}}</h2>

        @include('SubViews.Input', ['placeholder' => 'Enter your name'])
        @for($i=0; $i < 10; $i++) @if($i==5) @continue @endif
        <p>{{ $i }}</p>

        @endfor
    </body>
</html>
