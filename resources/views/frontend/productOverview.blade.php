<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Overview</title>
    @vite('resources/css/app.css') 
    <link href="../path/to/src/pagedone.css" rel="stylesheet"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
</head>
<body class="bg-white">

    {{-- HEADER START --}}
        <x-header />
    {{-- HEADER END --}}

    {{-- MAIN CONTENT --}}
    <main>
        <x-product-overview :overview="$overview" />
        
    </main>
    <x-footer/>
    <script src="../path/to/src/pagedone.js"></script>
</body>
</html>
