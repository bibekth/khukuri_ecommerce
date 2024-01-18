{{-- Bootstrap:5 css --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

{{-- Bootstrap icons. --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

{{-- Bootstrap script --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

{{-- Google Fonts --}}
<link
    href="https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Acme|Alegreya|Alegreya+Sans|Anton|Archivo|Archivo+Black|Archivo+Narrow|Arimo|Arvo|Asap|Asap+Condensed|Bitter|Bowlby+One+SC|Bree+Serif|Cabin|Cairo|Catamaran|Crete+Round|Crimson+Text|Cuprum|Dancing+Script|Dosis|Droid+Sans|Droid+Serif|EB+Garamond|Exo|Exo+2|Faustina|Fira+Sans|Fjalla+One|Francois+One|Gloria+Hallelujah|Hind|Inconsolata|Indie+Flower|Josefin+Sans|Julee|Karla|Lato|Libre+Baskerville|Libre+Franklin|Lobster|Lora|Mada|Manuale|Maven+Pro|Merriweather|Merriweather+Sans|Montserrat|Montserrat+Subrayada|Mukta+Vaani|Muli|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Open+Sans+Condensed:300|Oswald|Oxygen|PT+Sans|PT+Sans+Caption|PT+Sans+Narrow|PT+Serif|Pacifico|Passion+One|Pathway+Gothic+One|Play|Playfair+Display|Poppins|Questrial|Quicksand|Raleway|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab|Ropa+Sans|Rubik|Saira|Saira+Condensed|Saira+Extra+Condensed|Saira+Semi+Condensed|Sedgwick+Ave|Sedgwick+Ave+Display|Shadows+Into+Light|Signika|Slabo+27px|Source+Code+Pro|Source+Sans+Pro|Spectral|Titillium+Web|Ubuntu|Ubuntu+Condensed|Varela+Round|Vollkorn|Work+Sans|Yanone+Kaffeesatz|Zilla+Slab|Zilla+Slab+Highlight"
    rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">


{{-- select2 --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

{{-- @unless (isset($excludeProductScript) && $excludeProductScript) --}}
<script>
    $(document).ready(function(){
    $(".table").dataTable({
        "bInfo": false, //Dont display info e.g. "Showing 1 to 4 of 4 entries"
        "paging": false,//Dont want paging
        "bPaginate": false, //Dont want pagination
        "bSort": false, //If you don't want to sort by clicking.
        language: { search: "Search " }, //To change the search label

    });
})
</script>
{{-- @endunless --}}

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'inter', sans-serif;
        color: #cccccc;
    }

    body {
        background-color: #0f1216;
    }

    a {
        text-decoration: none;
        color: inherit;
    }

    a:visited {
        color: inherit;
        /* Set the color to the same color as the default link color */
    }

    .visited-link {
        border-bottom: 2px solid #386e75;
    }

    input:focus::placeholder {
        color: transparent;
    }

    textarea:focus::placeholder {
        color: transparent;
    }

    /* .dataTables_filter input{
        background-color: transparent;
        border: 2px solid #ffa31a;
        outline: none;
        border-radius: 4px;
    } */

    /* .dataTables_filter{
        display: flex;
        justify-content: flex-end;
    } */

    .dataTables_filter input {
        border-radius: 4px;
        border: 3px solid #386e75;
        outline: none;
    }

    .thead {
        background-color: #386e75;
    }

    .thead th {
        color: #000;
        font-weight: 700;
    }

    .tbody {
        background-color: #1e1817;
    }

    .table-wrapper {
        padding-bottom: 5rem;
    }

    .content-wrapper {
        min-height: 30rem;
    }

    .form-select {
        background-color: #1e1817;
        color: #ccc;
    }

    .option:hover{
        background-color: #386e75;
        color: #000;
    }
</style>
