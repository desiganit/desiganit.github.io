<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- change the image -->
    <link rel="icon" type="image/gif/png" href="img/z.png">

    <!-- Include Bootstrap CSS/JS/JQ -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="contact-2.js"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@484&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&family=EB+Garamond:wght@484&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style_1.css">
    <link rel="stylesheet" href="css/style_2.css">
    <link rel="stylesheet" href="custom.css">


    <!-- Mathjax Setting-->
    <script type="text/javascript">
    window.MathJax = {
        config: ["MMLorHTML.js"],
        jax: ["input/TeX", "input/MathML", "output/HTML-CSS", "output/NativeMML"],
        menuSettings: {
            texHints: true,
            semantics: false,
            zoom: 'NoZoom', // For zoom on double click "Double-Click",
            zscale: "200%",
        },
        extensions: ["tex2jax.js", "mml2jax.js", "MathMenu.js", "MathZoom.js"],
        TeX: {
            extensions: ["AMSmath.js", "AMSsymbols.js", "AMScd.js", "mathchoice.js",
                "action.js", "autobold.js", "begingroup.js", "unicode.js",
                "begingroup.js", "cancel.js", "color.js", "enclose.js",
                "extpfeil.js", "noErrors.js", "noUndefined.js", "autoload-all.js"
            ],
            Macros: {
                innerprod: ['{\\langle #1 \\rangle}', 1],
                paran: ['{\\left( #1\\right)}', 1],
                rbb: ['{\\mathbb{R}}'],
                nbb: ['{\\mathbb{N}}'],
                bb: ['{\\mathbb{#1}}', 1],
                squarebracket: ['{\\left[ #1 \\right]}', 1],
            }
        },
        tex2jax: {
            inlineMath: [
                ['$', '$'],
                ["\\(", "\\)"]
            ],
            displayMath: [
                ['$$', '$$'],
                ["\\[", "\\]"]
            ],
            processEscapes: true
        }
    };
    </script>

    <!-- math -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script> -->
    <!-- <link rel="stylesheet" href="latex2html5.min.css"> -->
    <!-- <script type="text/javascript" src="..//scripts//latex2html5.min.js"></script> -->


    <!-- Title -->
    <title>Query</title>

</head>

<body onload="fillCategory();">
    
    <!-- The foolowing php code will produce the header file-->
    
    <?php $page_name = "query" ?>

    <?php include 'head_foot/header.php'; ?>

    <!-- End of the header code -->


    <div class="container">
        <div class="jumbotron jumbotron-custom">
            <h1> 
                Query Form
            </h1>
            This query form will help you to solve the problems of various competative exams. Please click the type of doubts that you have.
            <br><br><br><br>

            <div class="powr-form-builder" id="30918fc8_1620749978"></div>
            <script src="https://www.powr.io/powr.js?platform=html"></script>
            
            <form name="drop_list"  action="yourpage.php" method="POST" >
                <select  NAME="Category" onChange="SelectSubCat();" >
                    <option value="">Category</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="SubCat" NAME="SubCat" onChange="SelectRedirect();">
                    <option value="">SubCat</option>
                </select>
            </form>
        </div>
    </div>
    


<br><br><br><br><br>
   

    <!--- Footer -->
    <?php include 'head_foot/footer.php'; ?>
    <!--- End Footer -->

</body>

<script>
    function fillCategory(){ 
        // this function is used to fill the category list on load
        addOption(document.drop_list.Category, "GATE", "GATE", "");
        addOption(document.drop_list.Category, "Other_Competative_exams", "Other competative exams", "");
        addOption(document.drop_list.Category, "Other", "Others", "");
    }

    function SelectSubCat()
    {
        // ON selection of category this function will work

        removeAllOptions(document.drop_list.SubCat);
        addOption(document.drop_list.SubCat, "", "SubCat", "");

        if(document.drop_list.Category.value == 'GATE')
        {
            addOption(document.drop_list.SubCat,"Math", "Mathematics");
            addOption(document.drop_list.SubCat,"EngMath", "Engineering Matehmatics");
        }

        if(document.drop_list.Category.value == 'Other_Competative_exams')
        {
            addOption(document.drop_list.SubCat,"NET", "CSIR-NET");
            addOption(document.drop_list.SubCat,"JAM", "JAM");
            addOption(document.drop_list.SubCat,"NBHM", "NBHM", "");
            addOption(document.drop_list.SubCat,"Other_Exams", "Other Exams", "");
        }

        if(document.drop_list.Category.value == 'Other')
        {
            addOption(document.drop_list.SubCat,"PHP", "PHP");
            addOption(document.drop_list.SubCat,"ASP", "ASP");
            addOption(document.drop_list.SubCat,"Perl", "Perl");
        }

    }
    ////////////////// 

    function removeAllOptions(selectbox)
    {
        var i;
        for(i=selectbox.options.length-1;i>=0;i--)
        {
            selectbox.options.remove(i);
            // selectbox.remove(i);
        }
    }


    function addOption(selectbox, value, text )
    {
        var optn = document.createElement("OPTION");
        optn.text = text;
        optn.value = value;

        selectbox.options.add(optn);
    }
    ///////////////////

    function SelectRedirect()
    {
        // ON selection of Sub category  this function will work

        //alert( document.drop_list.SubCat.value);

        switch(document.drop_list.SubCat.value)
        {
            case "Math":
            window.location="query/gate_query.php";
            break;

            case "EngMath":
            window.location="query/gate_query.php";
            break;

            case "NET":
            window.location="query/gate_query.php";
            break;

            case "JAM":
            window.location="query/gate_query.php";
            break;

            case "NBHM":
            window.location="query/gate_query.php";
            break;

            case "Other_Exams":
            window.location="query/gate_query.php";
            break;

            /// Can be extended to other different selections of SubCategory //////

            // default:
            // window.location="../"; // if no selection matches then redirected to home page
            // break;

        }// end of switch 
    }
</script>

</html>