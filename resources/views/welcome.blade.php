<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preline Bug</title>
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
    ])
</head>
<body>
    <div class="prose mx-auto">
        <ol>
            <li>
                Run `composer install`.
            </li>
            <li>
                Run `npm install`.
            </li>
            <li>
                Run `npm run build`.
            </li>
            <li>
                Check the console.
            </li>
            <li>
                If you see <code>Uncaught ReferenceError: require is not defined</code>, that is the bug.
            </li>
        </ol>
    </div>
</body>
</html>