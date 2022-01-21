<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Semantic Search</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <div class="ui containter">
        <div class="ui search">
            <input class="prompt" type="text" placeholder="Search">
            <div class="results"></div>
        </div>
    </div>
    <script>
        var content = [{
                title: 'Andorra',
                description: "Famous places."
            },
            {
                title: 'United Arab Emirates',
                description: "Famous places."
            },
            {
                title: 'Afghanistan',
                description: "Famous places."
            },
            {
                title: 'Antigua',
                description: "Famous places."
            },
            {
                title: 'Anguilla',
                description: "Famous places."
            },
            {
                title: 'Albania',
                description: "Famous places."
            },
            {
                title: 'Armenia',
                description: "Famous places."
            },
            {
                title: 'Netherlands Antilles',
                description: "Famous places."
            },
            {
                title: 'Angola',
                description: "Famous places."
            },
            {
                title: 'Argentina',
                description: "Famous places."
            },
            {
                title: 'American Samoa',
                description: "Famous places."
            },
            {
                title: 'Austria',
                description: "Famous places."
            },
            {
                title: 'Australia',
                description: "Famous places."
            },
            {
                title: 'Aruba',
                description: "Famous places."
            },
            {
                title: 'Aland Islands',
                description: "Famous places."
            },
            {
                title: 'Azerbaijan',
                description: "Famous places."
            },
            {
                title: 'Bosnia',
                description: "Famous places."
            },
            {
                title: 'Barbados',
                description: "Famous places."
            },
            {
                title: 'Bangladesh',
                description: "Famous places."
            },
            {
                title: 'Belgium',
                description: "Famous places."
            },
            {
                title: 'Burkina Faso',
                description: "Famous places."
            },
            {
                title: 'Bulgaria',
                description: "Famous places."
            },
            {
                title: 'Bahrain',
                description: "Famous places."
            },
            {
                title: 'Burundi',
                description: "Famous places."
            }
            // etc
        ];
        // $(document).ready(function {
        //         $('.ui.search')
        //             .search({
        //                 source: content,
        //                 searchFields: [
        //                     'title'
        //                 ],
        //                 fullTextSearch: false
        //             });

        //    1

        $('.ui.search').search({
            source: content
        });
    </script>
</body>

</html>
